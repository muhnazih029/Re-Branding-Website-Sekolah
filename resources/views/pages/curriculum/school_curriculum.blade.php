<x-layouts>
    <x-layouts.header />
    <x-curriculum.hero />

    <!-- Konten Utama -->
    <!-- Header -->
    <div style="background-color: #2D336B;" class="w-[300px] shadow-md p-4 text-center mt-10 ml-16 rounded-md">
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
        class="mx-auto mt-6 w-[800px] [&_ul]:list-disc [&_ul]:pl-5 [&_ol]:list-decimal [&_ol]:pl-5 [&_h2]:font-bold text-justify text-lg leading-relaxed space-y-4">
        {!! nl2br($settings['kurikulum_sekolah']->value) !!}
    </div>

    <div class="mt-6 mb-12 ml-10 px-4 sm:px-6 md:px-8">
        <x-breadcrumb />
    </div>

    <x-layouts.footer />
</x-layouts>
