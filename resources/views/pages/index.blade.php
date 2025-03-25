<x-layouts>
    <x-layouts.header />
    <x-corousel :settings="$settings" />
    <x-principal :kepsek="$kepsek" :settings="$settings" />

    <div class="container p-5 px-4 mx-auto md:px-8 lg:px-20">
        <!-- Garis -->
        <div class="my-5 mt-10 mb-10 border-t-2 border-blue-900"></div>
        <h1 class="mb-10 text-xl text-center text-blue-900">
            Berita dan Artikel Terkait:
        </h1>
        <!-- Grid Berita -->
        <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($announcements as $announcement)
                <x-card_news :announcement="$announcement" />
            @endforeach
        </div>
    </div>

    <x-layouts.footer />
</x-layouts>
