<x-layouts>
    <x-layouts.header />
    <x-corousel :settings="$settings" />
    <x-principal :kepsek="$kepsek" :settings="$settings" />

    <div class="container p-5 px-4 mx-auto md:px-8 lg:px-20">
        <!-- Garis -->
        <div class="my-5 mt-10 mb-10 border-t-2 border-blue-900"></div>
        <h1 class="mb-10 text-3xl font-semibold text-center text-blue-900">
            Berita dan Artikel Terkait:
        </h1>
        <!-- Grid Berita -->
        <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($announcements as $announcement)
                <x-card_news :announcement="$announcement" />
            @endforeach
        </div>
        <div class="mt-10 text-center">
            <a href="{{ route('announcement.index', ['alias' => 'prestasi-sekolah']) }}"
                class="inline-flex items-center gap-2 bg-blue-100 text-[#2D336B] px-6 py-3 rounded-full shadow hover:bg-blue-200 hover:text-[#1e265a] transition duration-300 font-semibold text-sm md:text-base">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
                Lihat Semua Pengumuman
            </a>
        </div>
        <div class="my-5 mt-10 mb-10 border-t-2 border-blue-900"></div>
    </div>

    <x-layouts.footer />
</x-layouts>
