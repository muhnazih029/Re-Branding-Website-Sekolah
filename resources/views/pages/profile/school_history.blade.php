<x-layouts>
    <x-layouts.header />
    <x-profiles.hero />

    <!-- Konten Utama -->
    <div class="flex items-center justify-center min-h-screen mt-4 bg-gray-100">
        <div class="container p-5 pl-10 mx-auto md:pl-20">
            <!-- Kotak PROFIL dan Sejarah Sekolah -->
            <div class="flex flex-col mb-5 space-y-5 md:flex-row md:items-start md:space-x-5 md:space-y-0">
                <div style="background-color: #2D336B;" class="w-[200px] shadow-md p-5 text-center">
                    <h1 class="text-xl font-bold text-white">PROFIL</h1>
                </div>
                <div style="background-color: #2D336B;" class="w-[300px] shadow-md p-5 text-center md:ml-5 md:mt-0 mt-0">
                    <h1 class="text-xl font-bold text-white">Sejarah Singkat Sekolah</h1>
                </div>
            </div>

            <!-- Garis Pembatas -->
            <div class="w-[200px] border-b-4 border-blue-900 mb-5"></div>

            <!-- Konten dan Sidebar -->
            <div class="flex flex-col md:flex-row">
                <!-- Sidebar Menu Profil -->
                <x-profiles.aside />

                <!-- Konten -->
                <div class="w-full p-5 bg-white rounded-lg shadow-md md:w-3/4 md:ml-5">
                    <!-- Sejarah -->
                    <div class="h-full mt-2">
                        <!-- Gambar Sejarah -->
                        <img src="{{ Storage::url(json_decode($settings['sejarah_text']->image ?? '[]', true)[0] ?? 'default.jpg') }}"
                            alt="Gambar Sejarah" class="w-full h-auto mx-auto rounded-lg shadow-md md:w-3/4 lg:w-1/2">
                        <!-- Konten Sejarah -->
                        <div
                            class="mt-6 text-[#2D336B] text-lg leading-relaxed [&_ul]:list-disc [&_ul]:pl-5 [&_ol]:list-decimal [&_ol]:pl-5">
                            {!! $settings['sejarah_text']->value !!}
                        </div>
                    </div>
                </div>
            </div>
            <x-breadcrumb />
        </div>
    </div>
    </div>
    <x-layouts.footer />
</x-layouts>
