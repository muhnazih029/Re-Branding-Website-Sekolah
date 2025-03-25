<x-layouts>
    <x-layouts.header />
    <x-profiles.hero />
    <!-- Konten Utama -->
    <div class="flex items-center justify-center min-h-screen mt-4 bg-gray-100">
        <div class="container p-5 mx-auto md:px-10">
            <div class="flex flex-col items-center gap-10 mb-5 md:flex-row md:items-start">
                <!-- Kotak Profil -->
                <div class="bg-[#2D336B] text-white shadow-lg p-5 text-center rounded-lg w-full max-w-[200px]">
                    <h1 class="text-xl font-bold">PROFIL</h1>
                </div>
                <!-- Kotak Visi & Misi -->
                <div class="bg-[#2D336B] text-white shadow-lg p-5 text-center rounded-lg w-full max-w-md">
                    <h1 class="text-xl font-bold">Visi & Misi Sekolah</h1>
                </div>
            </div>

            <!-- Garis Pembatas -->
            <div class="w-1/4 mb-5 border-b-4 border-blue-900"></div>

            <!-- Konten dan Sidebar -->
            <div class="flex flex-col gap-5 md:flex-row">
                <!-- Sidebar Menu Profil -->
                <div
                    class="bg-[#E6EAF7] text-[#2D336B] shadow-md p-5 rounded-lg w-full max-w-xs md:max-w-sm md:h-[50vh] overflow-y-auto">
                    <h2 class="mb-4 text-xl font-bold">Profil</h2>
                    <ul class="space-y-2 text-sm">
                        <li><a href="/profile/visi-misi" class="block font-semibold hover:text-blue-900">Visi Misi
                                Sekolah</a></li>
                        <li><a href="https://referensi.data.kemdikbud.go.id/tabs.php?npsn=20329336"
                                class="block font-semibold hover:text-blue-900">NPSN</a></li>
                        <li><a href="/profile/sejarah-sekolah" class="block font-semibold hover:text-blue-900">Sejarah
                                Sekolah</a></li>
                        <li><a href="/profile/pendidik" class="block font-semibold hover:text-blue-900">Pendidik dan
                                Tenaga Kependidikan</a></li>
                        <li><a href="/profile/peserta-didik" class="block font-semibold hover:text-blue-900">Peserta
                                Didik</a></li>
                        <li><a href="/profile/ekstrakulikuler"
                                class="block font-semibold hover:text-blue-900">Ekstrakurikuler</a></li>
                        <li><a href="/profile/dana-bos" class="block font-semibold hover:text-blue-900">BOS Bantuan
                                Operasional Sekolah</a></li>
                        <li><a href="/profile/sarana-prasarana" class="block font-semibold hover:text-blue-900">Sarana
                                dan Prasarana</a></li>
                    </ul>
                </div>

                <!-- Konten -->
                <div class="flex-1 p-5 bg-white rounded-lg shadow-lg">
                    <!-- Visi -->
                    <div class="mt-4">
                        <h2
                            class="inline-block px-3 py-1 text-xl font-bold bg-[#E6EAF7] text-[#2D336B] rounded shadow-md">
                            Visi</h2>
                        <p class="mt-2 text-[#2D336B] leading-relaxed text-lg">{{ $settings['visi']->value }}</p>
                    </div>

                    <!-- Misi -->
                    <div class="mt-6">
                        <h2
                            class="inline-block px-3 py-1 text-xl font-bold bg-[#E6EAF7] text-[#2D336B] rounded shadow-md">
                            Misi
                        </h2>
                        <div class="text-[#2D336B] text-lg leading-relaxed [&_ol]:list-decimal [&_ol]:pl-5">
                            {!! $settings['misi']->value !!}
                        </div>
                    </div>
                </div>
            </div>

            <x-breadcrumb />
        </div>
    </div>

    <x-layouts.footer />
</x-layouts>
