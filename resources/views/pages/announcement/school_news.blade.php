<x-layouts>
    <x-layouts.header />
    <x-announcement.hero />

    <!-- Judul Halaman -->
    <div class="w-[300px] shadow-md p-4 text-center mt-10 ml-8 rounded-md" style="background-color: #2D336B;">
        <h1 class="text-xl font-bold text-white">{{ $title }}</h1>
    </div>

    <!-- Konten -->
    <div class="min-h-screen px-6 py-12 bg-gray-100 md:px-20">
        <!-- Search -->
        <div class="flex justify-end mb-8">
            <div class="relative">
                <input type="text" id="search-announcement" placeholder="Search"
                    class="w-full py-2 pl-10 pr-4 border border-gray-300 rounded-full shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 md:w-64" />
                <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M12.9 14.32a8 8 0 111.42-1.42l4.38 4.38a1 1 0 01-1.42 1.42l-4.38-4.38zM8 14a6 6 0 100-12 6 6 0 000 12z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Looping Pengumuman -->
        <div id="announcement-container" data-type="{{ $type }}">
            @forelse ($announcements as $announcement)
                <div
                    class="flex flex-col gap-6 p-6 mb-10 transition bg-white rounded-lg shadow md:flex-row hover:shadow-lg">
                    <div class="w-full overflow-hidden bg-gray-300 rounded-lg h-100 md:w-1/3">
                        <img src="{{ asset('storage/' . $announcement->image) }}" alt="{{ $announcement->title }}"
                            class="object-cover w-full h-full max-w-[1920px] max-h-[1080px]" />
                    </div>
                    <div class="flex flex-col justify-between w-full md:w-2/3">
                        <div>
                            <h2 class="mb-2 text-xl font-semibold text-gray-800 md:text-2xl">
                                {{ $announcement->title }}
                            </h2>
                            <p class="mb-4 text-sm text-gray-600">
                                Oleh <strong>{{ $announcement->author }}</strong> •
                                {{ \Carbon\Carbon::parse($announcement->created_at)->translatedFormat('d F Y') }}
                            </p>
                            <p class="text-sm text-gray-700">
                                {{ Str::limit(strip_tags($announcement->content), 1000, '...') }}
                            </p>
                            <div class="mt-4">
                                <a href="{{ route('announcement.show', ['alias' => $alias, 'slug' => $announcement->slug]) }}"
                                    class="inline-block bg-[#2D336B] text-white px-4 py-2 rounded-md hover:bg-blue-800 transition text-sm">
                                    Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-500">Belum ada pengumuman atau berita.</p>
            @endforelse
        </div>

        <!-- Pagination -->
        <x-pagination :paginator="$announcements" />

        <!-- Breadcrumb -->
        <div class="flex items-center ml-4 space-x-2 mt-14">
            <x-breadcrumb />
        </div>
    </div>

    @push('scripts')
        @vite('resources/js/page/load-news.js')
    @endpush
    <x-layouts.footer />
</x-layouts>
