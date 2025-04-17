<x-layouts>
    <x-layouts.header />
    <x-galery.hero />
    <x-galery.search inputId="search-video" />

    @php
        $filteredGalleries = $galleries->filter(function ($item) {
            $files = json_decode($item->file);
            $videoFiles = collect($files)->filter(fn($f) => Str::endsWith($f, '.mp4'))->values();
            $item->files = $videoFiles;
            return count($videoFiles) > 0;
        });
    @endphp
    <!-- Grid Layout -->
    <div id="video-container"
        class="grid grid-cols-1 px-4 py-12 sm:grid-cols-2 md:grid-cols-3 gap-x-6 gap-y-10 md:px-12 lg:px-36">
        @foreach ($filteredGalleries as $index => $galery)
            @php
                $videoFiles = $galery->files;
                $videoCover = $videoFiles[0] ?? null;
            @endphp

            @if ($videoCover)
                {{-- Thumbnail & Trigger --}}
                <div class="relative overflow-hidden rounded-lg shadow-md cursor-pointer"
                    onclick="document.getElementById('modal-video-{{ $index }}').classList.remove('hidden')">
                    <div class="aspect-video w-full max-h-[43vh]">
                        <video src="{{ asset('storage/' . $videoCover) }}"
                            class="object-cover w-full h-full rounded-lg"></video>
                    </div>
                    <div
                        class="absolute bottom-0 w-full bg-[#2D336B] text-white text-center py-2 font-semibold rounded-b-lg">
                        {{ $galery->name }}
                    </div>
                </div>

                {{-- Modal --}}
                <div id="modal-video-{{ $index }}"
                    class="fixed inset-0 z-50 flex items-center justify-center hidden overflow-y-auto bg-black bg-opacity-70">
                    <div class="relative w-full max-w-4xl p-6 bg-white rounded-lg">
                        <button class="absolute text-2xl font-bold text-gray-600 top-2 right-4 hover:text-red-600"
                            onclick="document.getElementById('modal-video-{{ $index }}').classList.add('hidden')">&times;</button>
                        <h2 class="mb-4 text-xl font-semibold">{{ $galery->name }}</h2>
                        <div class="grid grid-cols-1 gap-4 max-h-[70vh] overflow-y-auto">
                            @foreach ($videoFiles as $file)
                                <video class="w-full rounded shadow" controls type="video/mp4">
                                    <source src="{{ asset('storage/' . $file) }}">
                                </video>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <div id="modal-wrapper"></div>

    <!-- Pagination -->
    <x-pagination :paginator="$galleries" />

    @push('scripts')
        @vite('resources/js/page/load-videos.js')
    @endpush

    <div class="flex items-center mt-10 mb-10 ml-4 space-x-2 sm:ml-24 md:space-x-4 lg:space-x-6">
        <x-breadcrumb />
    </div>
    <x-layouts.footer />
</x-layouts>
