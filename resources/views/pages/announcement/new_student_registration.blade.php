<x-layouts>
    <x-layouts.header />
    <x-announcement.hero />

    <!-- Konten Utama -->
    <!-- Header -->
    <div style="background-color: #2D336B;" class="w-[300px] shadow-md p-4 text-center mt-10 ml-8 rounded-md">
        <h1 class="text-xl font-bold text-white">Penerimaan Peserta Didik Baru (PPDB)</h1>
    </div>

    <!-- Container Utama -->
    <div class="flex flex-col items-center p-4">

        <!-- Tittle -->
        <div class="mt-4 text-center">
            <h1 class="text-lg font-bold text-blue-900 md:text-xl">
               Penerimaan Peserta Didik Baru (PPDB) SDN Bandarharjo 01 Kota Semarang
            </h1>
            <h2 class="text-lg font-bold text-blue-900 md:text-xl">
                Tahun Ajaran 2025/2026
            </h2>
        </div>

        <!-- Gambar Dokumen -->
        <div class="flex justify-center mt-12">
            <img src="/img/ppdb.jpeg" alt="Pendaftaran PPDB"
                class="w-full h-auto max-w-2xl rounded-lg shadow-xl">
        </div>

        {{-- Link Pendaftaran --}}
        <div class="mt-10 text-center">
            <h3>Pendaftaran Peserta Didik Baru SDN Bandarharjo 01 Kota Semarang Tahun Ajaran 2025/2026 dapat dilakukan dengan klik <b>'Daftar'</b> di bawah ini</h3>
            <a href="https://ppd.semarangkota.go.id/sd" target="_blank" rel="noopener noreferrer"
                class="inline-block bg-[#2D336B] hover:bg-[#1e254f] text-white font-semibold py-3 px-6 mt-2 rounded-lg shadow-md transition duration-300">
                Daftar
            </a>

        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="flex items-center mb-10 ml-8 space-x-2">
        <x-breadcrumb />
    </div>
    <x-layouts.footer />
</x-layouts>
