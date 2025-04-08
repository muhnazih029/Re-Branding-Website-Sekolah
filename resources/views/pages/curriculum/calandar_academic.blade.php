<x-layouts>
    <x-layouts.header />
    <x-curriculum.hero />

    <!-- Konten Utama -->
    <!-- Header -->
    <div style="background-color: #2D336B;" class="w-[300px] shadow-md p-4 text-center mt-10 ml-8 rounded-md">
        <h1 class="text-xl font-bold text-white">KALENDER AKADEMIK</h1>
    </div>

    <h1 class="mb-4 text-2xl font-bold text-center">{{ $calendar->title }}</h1>
    <br>

    <div class="flex items-center justify-center h-auto p-4 bg-gray-100">
        <div class="w-full max-w-4xl p-4 bg-white rounded-lg shadow-lg">
            @if ($calendar && $calendar->document)
                <iframe src="{{ Storage::url($calendar->document) }}"
                    class="w-full rounded-lg shadow h-64 sm:h-80 md:h-96 lg:h-[1080px]" frameborder="0">
                </iframe>
            @else
                <p class="text-center text-gray-500">Dokumen tidak tersedia</p>
            @endif
        </div>
    </div>

    <div class="mt-6 mb-4 px-4 sm:px-6 md:px-8">
        <x-breadcrumb />
    </div>
    
    <x-layouts.footer />
</x-layouts>
