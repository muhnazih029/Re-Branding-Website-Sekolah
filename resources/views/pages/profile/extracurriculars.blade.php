<x-layouts>
    <x-layouts.header />
    <x-profiles.hero />
    <!-- Konten Utama -->
    <div class="flex items-center justify-center min-h-screen mt-4 bg-gray-100">
        <div class="container p-5 pl-10 mx-auto md:pl-20">
            <!-- Kotak PROFIL dan Visi Misi Sekolah -->
            <div class="flex flex-col mb-5 space-y-5 md:flex-row md:items-start md:space-x-5 md:space-y-0">
                <div style="background-color: #2D336B;" class="w-[200px] shadow-md p-5 text-center">
                    <h1 class="text-xl font-bold text-white">PROFIL</h1>
                </div>
                <div style="background-color: #2D336B;" class="w-[300px] shadow-md p-5 text-center md:ml-5 md:mt-0 mt-0">
                    <h1 class="text-xl font-bold text-white">Ekstrakulikuler</h1>
                </div>
            </div>

            <!-- Garis Pembatas -->
            <div class="w-[200px] border-b-4 border-blue-900 mb-5"></div>

            <!-- Konten dan Sidebar -->
            <div class="flex flex-col md:flex-row">
                <x-profiles.aside />

                <!-- Konten -->
                <div
                    class="w-full p-6 shadow-lg bg-gradient-to-br from-gray-100 via-white to-gray-200 rounded-3xl md:w-3/4 md:ml-5">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        @foreach ($extracurriculars as $key => $extra)
                            <div x-data="{ open: false }"
                                class="overflow-hidden transition duration-300 bg-white border border-gray-200 shadow-md rounded-2xl hover:shadow-xl">

                                <div class="bg-[#2D336B] text-white px-5 py-3 font-semibold text-lg tracking-wide">
                                    {{ $key + 1 }}. {{ $extra->extra_name }}
                                </div>

                                <!-- Gambar -->
                                <div @click="open = !open"
                                    class="relative h-64 overflow-hidden transition-all duration-300 cursor-pointer group">
                                    <img src="{{ Storage::url($extra->image) }}" alt="{{ $extra->extra_name }}"
                                        class="object-cover w-full h-full transition duration-500 transform group-hover:scale-105" />

                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                                    </div>

                                    <div
                                        class="absolute px-3 py-1 text-sm font-medium text-gray-800 rounded-full shadow-sm bottom-4 right-4 bg-white/80">
                                        Klik untuk lihat deskripsi
                                    </div>
                                </div>

                                <!-- Deskripsi Container  -->
                                <div
                                    class="relative bg-[#2D336B] text-[#E6EAF7] text-sm px-5 py-4 h-40 overflow-hidden">
                                    <div x-show="!open" x-transition.opacity class="line-clamp-6">
                                        {{ $extra->description ?? 'Deskripsi tidak Ditemukan' }}
                                    </div>

                                    <div x-show="open" x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                        x-transition:leave="transition ease-in duration-200"
                                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                        class="absolute inset-0 px-5 py-4 overflow-y-auto bg-[#2D336B] custom-scroll"
                                        style="display: none;">
                                        {{ $extra->description ?? 'Deskripsi tidak ditemukan' }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <x-breadcrumb />
        </div>
    </div>
    <x-layouts.footer />
</x-layouts>
