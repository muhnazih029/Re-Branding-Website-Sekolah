<x-layouts>
    <x-layouts.header />
    <x-curriculum.hero />

    <!-- Konten Utama -->
    <!-- Header -->
    <div style="background-color: #2D336B;" class="w-[300px] shadow-md p-4 text-center mt-10 ml-8 rounded-md">
        <h1 class="text-xl font-bold text-white">TUGAS SISWA</h1>
    </div>

    <div class="w-full max-w-4xl p-4 mx-auto mt-6 rounded-lg">
        <!-- Judul -->
        <div class="inline-block p-2 mb-4 text-sm font-bold text-white rounded-md" style="background-color: #2D336B">
            Tugas Kelas {{ $classworks->first()->class_name ?? '' }}
        </div>

        <!-- Tabel -->
        <x-curriculum.classwork-table :classworks="$classworks" />
    </div>

    <div class="px-4 mt-6 mb-12 ml-10 sm:px-6 md:px-8">
        <x-breadcrumb />
    </div>

    <x-layouts.footer />
</x-layouts>
