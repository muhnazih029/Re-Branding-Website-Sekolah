<x-layouts>
    <x-layouts.header />
    <x-curriculum.hero />

    <!-- Konten Utama -->
    <div class="container p-4 mx-auto">
        <!-- Header -->
        <div style="background-color: #2D336B;"
            class="w-[300px] max-w-sm p-4 mx-auto mt-10 text-center rounded-md shadow-md md:ml-16">
            <h1 class="text-xl font-bold text-white">KURIKULUM SEKOLAH</h1>
        </div>
        <!-- Logo dan Judul -->
        <div class="flex flex-col items-center mt-10">
            <!-- Logo -->
            @if (!empty($settings['kurikulum_sekolah']->image))
                <div class="w-20 h-20 mb-4">
                    <img src="{{ Storage::url(json_decode($settings['kurikulum_sekolah']->image, true)[0] ?? '') }}"
                        alt="Logo Kurikulum" class="object-contain w-full h-full">
                </div>
            @endif
            <!-- Judul -->
            <h1 class="text-2xl font-bold text-center">{{ $settings['kurikulum_sekolah']->label }}</h1>
        </div>

        <!-- Deskripsi -->
        <div
            class="w-full max-w-3xl px-4 mx-auto mt-6 space-y-4 text-lg leading-relaxed [&_ul]:list-disc [&_ul]:pl-5 [&_ol]:list-decimal [&_ol]:pl-5 [&_h2]:font-bold text-justify">
            {!! nl2br($settings['kurikulum_sekolah']->value) !!}
        </div>
    </div>
    <div class="px-4 mt-6 mb-12 ml-3 sm:ml-3 md:ml-3 lg:ml-12">
        <x-breadcrumb />
    </div>

    <x-layouts.footer />
</x-layouts>
