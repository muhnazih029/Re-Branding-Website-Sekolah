<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDN Bandarharjo 01</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 font-poppins pt-[190px]">
    <div class="fixed top-0 left-0 w-full z-50">

        <!-- Header -->
        <nav style="background-color: #304193;" class="text-white p-2 md:p-4 flex justify-between items-center"></nav>
        <nav style="background-color: #2D336B;" class="text-white p-4 md:p-6 flex justify-between items-center">
            <!-- Logo dan Nama Sekolah -->
            <div class="flex items-center space-x-2 md:space-x-3 ml-2 md:ml-20">
                <!-- Logo -->
                <img src="{{ asset('img/logo.png') }}" alt="Logo SDN Bandarharjo" class="w-15 h-12 ">
                <!-- Nama Sekolah -->
                <div class="flex flex-col">
                    <span class="text-sm md:text-lg font-semibold">SDN BANDARHARJO 01</span>
                    <span class="text-sm md:text-lg font-semibold">KOTA SEMARANG</span>
                </div>
            </div>

            <!-- Tombol Gabung -->
            <button style="color: #2D336B;"
                class="bg-white font-bold px-3 py-1 md:px-4 md:py-2 rounded-full mr-2 md:mr-20 text-sm md:text-base">
                Gabung
            </button>
        </nav>

        <!-- Menu Header -->
        <div x-data="{ open: false }" style="background-color: #E6EAF7;"
            class="shadow-md relative z-50 flex justify-between items-center p-2">

            <!-- Hamburger Menu (Muncul hanya ketika layar mode kecil/medium) -->
            <button @click="open = !open" @mouseenter="open = true" @mouseleave="open = open"
                class="md:hidden p-4 focus:outline-none ml-auto">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>

            <!-- Menu untuk layar medium/kecil -->
            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform -translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform -translate-y-4"
                class="md:hidden absolute top-full left-0 w-full bg-white shadow-lg">
                <div class="container mx-auto flex flex-col space-y-2 py-3 uppercase">
                    <!-- Beranda -->
                    <a href="/.."
                        class="text-[rgb(45,51,107)] font-semibold px-4 py-2 hover:bg-gray-100 text-sm">Beranda</a>

                    <!-- Dropdown Profil -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open"
                            class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-4 py-2 w-full text-left hover:bg-gray-100 text-sm">
                            Profil
                            <svg class="inline ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95" class="pl-4">
                            <a href="/profile/visi-misi"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Visi &
                                Misi</a>
                            <a href="https://referensi.data.kemdikbud.go.id/tabs.php?npsn=20329336"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">NPSN</a>
                            <a href="/profile/sejarah-sekolah"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Sejarah
                                Sekolah</a>
                            <a href="/profile/pendidik"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Pendidik &
                                Tenaga
                                Pendidik</a>
                            <a href="/profile/peserta-didik"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Peserta
                                Didik</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Prestasi
                                Sekolah</a>
                            <a href="/profile/ekstrakulikuler"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Ekstrakurikuler</a>
                            <a href="/profile/dana-bos"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">BOS
                                Bantuan Operasional Sekolah</a>
                            <a href="/profile/sarana-prasarana"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Sarana
                                & Prasarana</a>
                        </div>
                    </div>

                    <!-- Dropdown Kurikulum -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open"
                            class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-4 py-2 w-full text-left hover:bg-gray-100 text-sm">
                            Kurikulum
                            <svg class="inline ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95" class="pl-4">
                            <a href="/kurikulum/kurikulum-sekolah"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Kurikulum
                                Sekolah</a>
                            <a href="/kurikulum/kalender-akademik"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Kalender
                                Pendidikan</a>
                            <a href="/kurikulum/video-pembelajaran"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Video
                                Pembelajaran
                                Siswa</a>
                        </div>
                    </div>

                    <!-- Dropdown Pengumuman -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open"
                            class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-4 py-2 w-full text-left hover:bg-gray-100 text-sm">
                            Pengumuman
                            <svg class="inline ml-1 w-4 h-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95" class="pl-4">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Berita
                                Sekolah</a>
                            <a href="/pengumuman/ppdb"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Pendaftaran
                                Peserta
                                Didik Baru</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Lomba</a>
                        </div>
                    </div>

                    <!-- Dropdown Galeri -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open"
                            class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-4 py-2 w-full text-left hover:bg-gray-100 text-sm">
                            Galeri
                            <svg class="inline ml-1 w-4 h-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95" class="pl-4">
                            <a href="/galeri/foto"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Foto</a>
                            <a href="/galeri/video"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Video</a>
                        </div>
                    </div>

                    <!-- Dropdown Website Terkait -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open"
                            class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-4 py-2 w-full text-left hover:bg-gray-100 text-sm">
                            Website Terkait
                            <svg class="inline ml-1 w-4 h-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95" class="pl-4">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Kemendikbud</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Pemkot
                                Semarang</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Dinas
                                Pendidikan
                                Kota Semarang</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Sang
                                Juara</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Nomor Induk
                                Siswa
                                Nasional</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Dapodik</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">SIMPKB</a>
                        </div>
                    </div>
                    <!-- Kontak Kami -->
                    <a href="/kontak"
                        class="text-[rgb(45,51,107)] font-semibold px-4 py-2 hover:bg-gray-100 text-sm">Kontak Kami</a>
                </div>
            </div>

            <!-- Menu untuk layar besar -->
            <div class="hidden md:flex container mx-auto flex-wrap justify-center space-x-2 py-3 uppercase">
                <!-- Beranda -->
                <a href="/.." class="text-[rgb(45,51,107)] font-semibold px-2 py-1 relative group text-lg">
                    Beranda
                    <span
                        class="absolute inset-x-0 bottom-0 h-0.5 bg-blue-900 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                </a>

                <!-- Dropdown Profil -->
                <div x-data="{ open: false }" class="relative">
                    <button @mouseenter="open = true" @mouseleave="open = false"
                        class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-2 py-1 relative group text-lg">
                        Profil
                        <svg class="inline ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                        <span
                            class="absolute inset-x-0 bottom-0 h-0.5 bg-blue-900 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95" @mouseenter="open = true"
                        @mouseleave="open = false" style="background-color: #2D336B;"
                        class="absolute left-0 top-full mt-1 w-56 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none z-50">
                        <div class="py-1">
                            <a href="/profile/visi-misi"
                                class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Visi &
                                Misi</a>
                            <a href="https://referensi.data.kemdikbud.go.id/tabs.php?npsn=20329336" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">NPSN</a>
                            <a href="/profile/sejarah-sekolah"
                                class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Sejarah
                                Sekolah</a>
                            <a href="/profile/pendidik"
                                class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Pendidik &
                                Tenaga Pendidik</a>
                            <a href="/profile/peserta-didik"
                                class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Peserta
                                Didik</a>
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Prestasi
                                Sekolah</a>
                            <a href="/profile/ekstrakulikuler"
                                class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Ekstrakurikuler</a>
                            <a href="/profile/dana-bos"
                                class="block px-4 py-2 text-sm text-white hover:bg-blue-900">BOS Bantuan
                                Operasional Sekolah</a>
                            <a href="/profile/sarana-prasarana"
                                class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Sarana &
                                Prasarana</a>
                        </div>
                    </div>
                </div>

                <!-- Dropdown Kurikulum -->
                <div x-data="{ open: false }" class="relative">
                    <button @mouseenter="open = true" @mouseleave="open = false"
                        class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-2 py-1 relative group text-lg">
                        Kurikulum
                        <svg class="inline ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                        <span
                            class="absolute inset-x-0 bottom-0 h-0.5 bg-blue-900 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95" @mouseenter="open = true"
                        @mouseleave="open = false" style="background-color: #2D336B;"
                        class="absolute left-0 top-full mt-1 w-48 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none z-50">
                        <div class="py-1">
                            <a href="/kurikulum/kurikulum-sekolah" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Kurikulum
                                Sekolah</a>
                            <a href="kurikulum/kalender-akademik" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Kalender
                                Pendidikan</a>
                            <a href="kurikulum/tugas-siswa" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Tugas
                                Siswa</a>
                            <a href="kurikulum/video-pembelajaran" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Video
                                Pembelajaran Siswa</a>
                        </div>
                    </div>
                </div>

                <!-- Dropdown Pengumuman -->
                <div x-data="{ open: false }" class="relative">
                    <button @mouseenter="open = true" @mouseleave="open = false"
                        class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-2 py-1 relative group text-lg">
                        Pengumuman
                        <svg class="inline ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                        <span
                            class="absolute inset-x-0 bottom-0 h-0.5 bg-blue-900 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95" @mouseenter="open = true"
                        @mouseleave="open = false" style="background-color: #2D336B;"
                        class="absolute left-0 top-full mt-1 w-56 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none z-50">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Berita
                                Sekolah</a>
                            <a href="/pengumuman/ppdp" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Pendaftaran
                                Peserta Didik Baru</a>
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Lomba</a>
                        </div>
                    </div>
                </div>

                <!-- Dropdown Galeri -->
                <div x-data="{ open: false }" class="relative">
                    <button @mouseenter="open = true" @mouseleave="open = false"
                        class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-2 py-1 relative group text-lg">
                        Galeri
                        <svg class="inline ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                        <span
                            class="absolute inset-x-0 bottom-0 h-0.5 bg-blue-900 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95" @mouseenter="open = true"
                        @mouseleave="open = false" style="background-color: #2D336B;"
                        class="absolute left-0 top-full mt-1 w-56 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none z-50">
                        <div class="py-1">
                            <a href="/galeri/foto" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Foto</a>
                            <a href="/galeri/video" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Video</a>
                        </div>
                    </div>
                </div>

                <!-- Dropdown Website Terkait -->
                <div x-data="{ open: false }" class="relative">
                    <button @mouseenter="open = true" @mouseleave="open = false"
                        class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-2 py-1 relative group text-lg">
                        Website Terkait
                        <svg class="inline ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                        <span
                            class="absolute inset-x-0 bottom-0 h-0.5 bg-blue-900 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95" @mouseenter="open = true"
                        @mouseleave="open = false" style="background-color: #2D336B;"
                        class="absolute left-0 top-full mt-1 w-56 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none z-50">
                        <div class="py-1">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Kemendikbud</a>
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Pemkot
                                Semarang</a>
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Dinas
                                Pendidikan Kota Semarang</a>
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Sang
                                Juara</a>
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Nomor Induk
                                Siswa Nasional</a>
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Dapodik</a>
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">SIMPKB</a>
                        </div>
                    </div>
                </div>
                <!-- Kontak Kami -->
                <a href="/kontak" class="text-[rgb(45,51,107)] font-semibold px-2 py-1 relative group text-lg">
                    Kontak Kami
                    <span
                        class="absolute inset-x-0 bottom-0 h-0.5 bg-blue-900 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                </a>
            </div>
        </div>
    </div>

    <!-- Kotak Slide -->
    <div class="container mx-auto mt-16 relative z-10">
        <div class="swiper mySwiper w-full md:w-3/4 lg:w-3/4 mx-auto">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide h-[300px] md:h-[500px] rounded-xl overflow-hidden bg-white">
                    <img src="{{ asset('img/slider1.jpeg') }}" alt="Gambar 1"
                        class="w-full h-full object-contain object-center">
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide h-[300px] md:h-[500px] rounded-xl overflow-hidden bg-white">
                    <img src="{{ asset('img/slider2.jpg') }}" alt="Gambar 2"
                        class="w-full h-full object-contain object-center">
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide h-[300px] md:h-[500px] rounded-xl overflow-hidden bg-white">
                    <img src="{{ asset('img/slider3.jpeg') }}" alt="Gambar 3"
                        class="w-full h-full object-contain object-center">
                </div>
            </div>
            <!-- Swiper Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <!-- Sambutan Kepsek -->
    <div class="container mx-auto mt-24 mb-10 text-center">
        <h1 class="text-blue-900 text-4xl font-semibold ">
            Selamat Datang di Website Resmi SDN Bandarharjo 01
        </h1>
    </div>

    <!-- Sambutan dan Foto Kepala Sekolah -->
    <div class="bg-gray-100 p-5 rounded-lg mx-4 md:mx-8">
        <div class="flex flex-col md:flex-row items-center">
            <!-- Container Foto Kepsek-->
            <div class="w-full md:w-1/3 text-center relative  ">
                <!-- Blopmaker SVG -->
                <div class="absolute inset-0 z-0 flex items-center justify-center">
                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
                        class="w-64 h-46 md:w-64 md:h-46 text-blue-900 opacity-100">
                        <path fill="#2D336B"
                            d="M69.3,-22.5C78.6,5.9,67,41.1,43.2,58.1C19.4,75,-16.6,73.7,-40,56.4C-63.4,39.1,-74.1,5.7,-65.4,-22.1C-56.6,-49.8,-28.3,-72.1,0.9,-72.4C30,-72.7,60.1,-51,69.3,-22.5Z"
                            transform="translate(100 100)" />
                    </svg>
                </div>

                <!-- Foto Kepsek -->
                <img src="{{ asset('img/kepsek.png') }}" alt="Kepala Sekolah"
                    class="mx-auto w-50 h-74 md:w-50 md:h-70 rounded-lg relative z-10">

                <!-- Kotak Nama -->
                <div style="background-color: #2D336B"
                    class="absolute bottom-[-40px] md:bottom-[-55px] left-1/2 transform -translate-x-1/2 text-white py-2 px-4 rounded-full w-48 md:w-64 text-center shadow-lg z-20">
                    <p class="text-xs md:text-sm font-semibold">Kepala Sekolah SDN Bandarharjo 01</p>
                    <p class="text-xs md:text-sm">Christina Ardiyanti, S.Pd</p>
                </div>
            </div>

            <!-- Sambutan -->
            <div class="w-full md:w-2/3 mt-16 md:mt-0 mx-auto ">
                <!-- Kotak Sambutan Kepsek -->
                <div style="background-color: #E6EAF7;"
                    class="p-3 rounded-full text-center font-semibold text-gray-700 w-full md:w-3/4 mx-auto">
                    SAMBUTAN KEPALA SEKOLAH
                </div>

                <!-- Kotak Sambutan -->
                <div style="background-color: #E6EAF7;"
                    class="border-2 p-4 md:p-5 rounded-2xl text-gray-700 mt-4 w-full md:w-3/4 mx-auto">
                    <p class="text-sm md:text-base">
                        Assalamualaikum wr. wb. <br>
                        Selamat datang di website resmi SDN Bandarharjo 01 <br>
                        Dengan penuh rasa syukur dan bangga, kami mempersembahkan website ini sebagai salah satu wadah
                        untuk memperkenalkan dan berbagi informasi mengenai sekolah kita tercinta. Melalui media digital
                        ini, kami berharap dapat menjangkau seluruh keluarga besar SDN Bandarharjo 01, mulai dari siswa,
                        orang tua, hingga alumni, serta masyarakat luas.<br>
                        <br>
                        Website ini dirancang dengan tujuan untuk memberikan kemudahan akses informasi mengenai kegiatan
                        akademik, jadwal sekolah, berita terbaru, dan berbagai aktivitas lainnya yang berlangsung di
                        sekolah kita. Selain itu, kami juga menyediakan berbagai sumber daya yang bermanfaat bagi siswa,
                        orang tua, dan tenaga pendidik dalam mendukung proses belajar mengajar.<br>
                        <br>
                        Kami percaya bahwa komunikasi yang baik antara sekolah, siswa, dan orang tua merupakan kunci
                        kesuksesan pendidikan. Oleh karena itu, kami berharap website ini dapat menjadi sarana yang
                        efektif untuk memperkuat hubungan tersebut, serta mempermudah dalam menyampaikan berbagai
                        informasi penting.<br>
                        Wassalamualaikum wr. wb
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto p-5 px-4 md:px-8 lg:px-20">
        <!-- Garis -->
        <div class="border-t-2 border-blue-900 my-5 mt-10 mb-10"></div>
        <h1 class="text-blue-900 text-xl text-center mb-10">
            Berita dan Artikel Terkait:
        </h1>

        <!-- Grid Berita -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Kartu Berita 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
                <!-- Thumbnail Berita -->
                <div class="w-full h-48 bg-gray-300 rounded-t-lg overflow-hidden">
                    <img src="{{ asset('img/berita 1.jpg') }}" alt="Berita 1" class="w-full h-full object-cover">
                </div>

                <!-- Konten Berita -->
                <div class="p-4 flex flex-col flex-grow">
                    <!-- Judul Berita -->
                    <h2 class="text-xl font-semibold text-blue-900">Siapakah Penemu Listrik? Michael Faraday atau
                        Benjamin Franklin?</h2>

                    <!-- Deskripsi Singkat -->
                    <p class="text-sm text-gray-600 mt-2 line-clamp-3 flex-grow">
                        Kehadiran pemanfaatan listrik mengubah wajah dunia, mulai dari corak produksi, komunikasi,
                        transportasi, dan lainnya. Kehadiran listrik ternyata mengalami perjalanan yang panjang hingga
                        bisa kita nikmati sekarang.
                    </p>

                    <!-- Tombol Baca Selengkapnya -->
                    <a href="https://www.ruangguru.com/blog/sejarah-penemuan-listrik"
                        class="mt-4 inline-block bg-blue-900 text-white text-sm font-semibold py-2 px-4 rounded-lg hover:bg-blue-800 transition duration-300 w-fit">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>

            <!-- Kartu Berita 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
                <!-- Thumbnail Berita -->
                <div class="w-full h-48 bg-gray-300 rounded-t-lg overflow-hidden">
                    <img src="{{ asset('img/berita 2.png') }}" alt="Berita 2" class="w-full h-full object-cover">
                </div>

                <!-- Konten Berita -->
                <div class="p-4 flex flex-col flex-grow">
                    <!-- Judul Berita -->
                    <h2 class="text-xl font-semibold text-blue-900">Al Khawarizmi, Tokoh Penemu Matematika & Bapak
                        Aljabar</h2>

                    <!-- Deskripsi Singkat -->
                    <p class="text-sm text-gray-600 mt-2 line-clamp-3 flex-grow">
                        Al-Khawarizmi adalah ilmuwan yang menyumbangkan pemikiran terbesarnya di dalam matematika.
                        Karya-karyanya sangat berpengaruh bagi peradaban manusia. Seperti apakah sosok penemu matematika
                        ini?
                    </p>

                    <!-- Tombol Baca Selengkapnya -->
                    <a href="https://www.ruangguru.com/blog/al-khawarizmi"
                        class="mt-4 inline-block bg-blue-900 text-white text-sm font-semibold py-2 px-4 rounded-lg hover:bg-blue-800 transition duration-300 w-fit">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>

            <!-- Kartu Berita 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
                <!-- Thumbnail Berita -->
                <div class="w-full h-48 bg-gray-300 rounded-t-lg overflow-hidden">
                    <img src="{{ asset('img/berita 3.jpg') }}" alt="Berita 3" class="w-full h-full object-cover">
                </div>

                <!-- Konten Berita -->
                <div class="p-4 flex flex-col flex-grow">
                    <!-- Judul Berita -->
                    <h2 class="text-xl font-semibold text-blue-900">7 Tips Memulai Semester Baru yang Sebaiknya Kamu
                        Lakukan!</h2>

                    <!-- Deskripsi Singkat -->
                    <p class="text-sm text-gray-600 mt-2 line-clamp-3 flex-grow">
                        Liburan telah usai, saatnya menyambut semester baru! Yuk, cari tahu apa saja hal penting yang
                        harus kamu lakukan untuk memulai semester baru kali ini.
                    </p>

                    <!-- Tombol Baca Selengkapnya -->
                    <a href="https://www.ruangguru.com/blog/menyambut-semester-baru"
                        class="mt-4 inline-block bg-blue-900 text-white text-sm font-semibold py-2 px-4 rounded-lg hover:bg-blue-800 transition duration-300 w-fit">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>

            <!-- Kartu Berita 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
                <!-- Thumbnail Berita -->
                <div class="w-full h-48 bg-gray-300 rounded-t-lg overflow-hidden">
                    <img src="{{ asset('img/berita 4.png') }}" alt="Berita 4" class="w-full h-full object-cover">
                </div>

                <!-- Konten Berita -->
                <div class="p-4 flex flex-col flex-grow">
                    <!-- Judul Berita -->
                    <h2 class="text-xl font-semibold text-blue-900">15 Contoh Cerita Liburan Sekolah Seru Berbagai Tema
                    </h2>

                    <!-- Deskripsi Singkat -->
                    <p class="text-sm text-gray-600 mt-2 line-clamp-3 flex-grow">
                        Liburan sekolah memang menjadi hal yang dinanti-nanti. Yuk, simak beberapa contoh cerita liburan
                        sekolah seru dan menarik yang bisa kamu jadikan referensi.
                    </p>

                    <!-- Tombol Baca Selengkapnya -->
                    <a href="https://www.ruangguru.com/blog/contoh-cerita-liburan-sekolah-berbagai-tema"
                        class="mt-4 inline-block bg-blue-900 text-white text-sm font-semibold py-2 px-4 rounded-lg hover:bg-blue-800 transition duration-300 w-fit">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>

            <!-- Kartu Berita 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
                <!-- Thumbnail Berita -->
                <div class="w-full h-48 bg-gray-300 rounded-t-lg overflow-hidden">
                    <img src="{{ asset('img/berita 5.png') }}" alt="Berita 5" class="w-full h-full object-cover">
                </div>

                <!-- Konten Berita -->
                <div class="p-4 flex flex-col flex-grow">
                    <!-- Judul Berita -->
                    <h2 class="text-xl font-semibold text-blue-900">Benarkah Penyumbang Oksigen Terbesar Bumi Berasal
                        dari Pohon?</h2>

                    <!-- Deskripsi Singkat -->
                    <p class="text-sm text-gray-600 mt-2 line-clamp-3 flex-grow">
                        Artikel ini mengungkap fakta bahwa pohon bukanlah sumber oksigen terbesar di planet kita. Lalu,
                        apa penyumbang oksigen terbesar di bumi? Yuk, cari tahu!
                    </p>

                    <!-- Tombol Baca Selengkapnya -->
                    <a href="https://www.ruangguru.com/blog/benarkah-penyumbang-oksigen-terbesar-kita-berasal-dari-pohon"
                        class="mt-4 inline-block bg-blue-900 text-white text-sm font-semibold py-2 px-4 rounded-lg hover:bg-blue-800 transition duration-300 w-fit">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>



    </div>
    </div>

    <!-- Script untuk Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            loop: true,
        });
    </script>

    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>

</html>
