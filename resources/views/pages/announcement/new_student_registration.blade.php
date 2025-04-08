<x-layouts>
    <x-layouts.header />
    <x-announcement.hero />

    <!-- Konten Utama -->
    <!-- Header -->
    <div style="background-color: #2D336B;" class="w-[300px] shadow-md p-4 text-center mt-10 ml-8 rounded-md">
        <h1 class="text-xl font-bold text-white">Pendaftaran Peserta Didik Baru (PPDB)</h1>
    </div>

    <!-- Container Utama -->
    <div class="flex flex-col items-center p-4">

        <!-- Tittle -->
        <div class="mt-4 text-center">
            <h1 class="text-lg font-bold text-blue-900 md:text-xl">
                Berikut adalah siswa yang dinyatakan diterima di SDN Bandarharjo 01
            </h1>
            <h2 class="text-lg font-bold text-blue-900 md:text-xl">
                Kota Semarang Tahun Ajaran 2024/2025
            </h2>
        </div>

        <!-- Gambar Dokumen -->
        <div class="flex justify-center mt-4">
            <img src="/img/ppdb.png" alt="Pendaftaran PPDB"
                class="w-full h-auto max-w-2xl rounded-lg shadow-lg sm:w-4/5 md:w-3/4 lg:w-1/2 xl:w-1/3">
        </div>
    </div>

    <!-- Breadcrumb Navigation -->
    <div class="flex items-center mb-10 ml-8 space-x-2">
        <x-breadcrumb />
    </div>
    <x-layouts.footer />
</x-layouts>
