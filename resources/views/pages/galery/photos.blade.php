<x-layouts>
    <x-layouts.header />
    <x-galery.hero />
    <x-galery.search inputId="search-photo" />

    @php
        $filteredGalleries = $galleries->filter(function ($item) {
            $files = json_decode($item->file);
            $photoFiles = collect($files)->filter(fn($f) => Str::endsWith($f, ['.jpg', '.jpeg', '.png']))->values();
            $item->files = $photoFiles;
            return count($photoFiles) > 0;
        });
    @endphp

    <!-- Grid Layout -->
    <div id="photos-container"
        class="grid grid-cols-1 px-4 py-12 sm:grid-cols-2 md:grid-cols-3 gap-x-6 gap-y-10 md:px-12 lg:px-36">
        @foreach ($filteredGalleries as $index => $galery)
            @php
                $imageFiles = $galery->files;
                $cover = $imageFiles->first();
            @endphp

            @if ($cover)
                <div class="relative overflow-hidden rounded-lg shadow-md cursor-pointer"
                    onclick="document.getElementById('modal-{{ $index }}').classList.remove('hidden')">

                    <!-- Gunakan aspect-ratio agar tidak gepeng -->
                    <div class="w-full aspect-[4/3] overflow-hidden rounded-lg">
                        <img src="{{ asset('storage/' . $cover) }}" alt="{{ $galery->name }}"
                            class="object-cover w-full h-full" />
                    </div>

                    <div
                        class="absolute bottom-0 w-full bg-[#2D336B] text-white text-center py-2 font-semibold rounded-b-lg">
                        {{ $galery->name }}
                    </div>
                </div>

                <!-- Modal -->
                <div id="modal-{{ $index }}"
                    class="fixed inset-0 z-50 flex items-center justify-center hidden overflow-y-auto bg-black bg-opacity-70">
                    <div class="relative w-full max-w-4xl p-6 bg-white rounded-lg">
                        <button class="absolute text-2xl font-bold text-gray-600 top-2 right-4 hover:text-red-600"
                            onclick="document.getElementById('modal-{{ $index }}').classList.add('hidden')">&times;</button>
                        <h2 class="mb-4 text-xl font-semibold">{{ $galery->name }}</h2>
                        <div class="grid grid-cols-3 gap-4 max-h-[70vh] overflow-y-auto">
                            @foreach ($imageFiles as $file)
                                <img src="{{ asset('storage/' . $file) }}" alt=""
                                    class="w-full rounded shadow object-cover aspect-[4/3]">
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <!-- Pagination -->
    <x-pagination :paginator="$galleries" />

    @push('scripts')
        @vite('resources/js/page/load-photos.js')
    @endpush

    <div class="flex items-center mt-10 mb-10 ml-24 space-x-2">
        <x-breadcrumb />
    </div>
    <x-layouts.footer />
</x-layouts>
