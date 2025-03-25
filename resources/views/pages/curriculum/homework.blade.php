{{ 'ini halaman tugas sekolah' }}

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
    <div class="fixed top-0 left-0 z-50 w-full">

        <!-- Header -->
        <nav style="background-color: #304193;" class="flex items-center justify-between p-2 text-white md:p-4"></nav>
        <nav style="background-color: #2D336B;" class="flex items-center justify-between p-4 text-white md:p-6">
            <!-- Logo dan Nama Sekolah -->
            <div class="flex items-center ml-2 space-x-2 md:space-x-3 md:ml-20">
                <img src="{{ asset('img/logo.png') }}" alt="Logo SDN Bandarharjo" class="h-12 w-15">
                <div class="flex flex-col">
                    <span class="text-sm font-semibold md:text-lg">SDN BANDARHARJO 01</span>
                    <span class="text-sm font-semibold md:text-lg">KOTA SEMARANG</span>
                </div>
            </div>
            <!-- Tombol Gabung -->
            <button style="color: #2D336B;"
                class="px-3 py-1 mr-2 text-sm font-bold bg-white rounded-full md:px-4 md:py-2 md:mr-20 md:text-base">
                Gabung
            </button>
        </nav>

        <!-- Menu Header -->
        <div x-data="{ open: false }" style="background-color: #E6EAF7;"
            class="relative z-50 flex items-center justify-between p-2 shadow-md">

            <!-- Hamburger Menu (Muncul hanya ketika layar mode kecil/medium) -->
            <button @click="open = !open" @mouseenter="open = true" @mouseleave="open = open"
                class="p-4 ml-auto md:hidden focus:outline-none">
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
                class="absolute left-0 w-full bg-white shadow-lg md:hidden top-full">
                <div class="container flex flex-col py-3 mx-auto space-y-2 uppercase">
                    <!-- Beranda -->
                    <a href="#"
                        class="text-[rgb(45,51,107)] font-semibold px-4 py-2 hover:bg-gray-100 text-sm">Beranda</a>

                    <!-- Dropdown Profil -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open"
                            class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-4 py-2 w-full text-left hover:bg-gray-100 text-sm">
                            Profil
                            <svg class="inline w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
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
                            <a href="#"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Visi &
                                Misi</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">NPSN</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Sejarah
                                Sekolah</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Pendidik &
                                Tenaga
                                Pendidik</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Peserta
                                Didik</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Prestasi
                                Sekolah</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Ekstrakurikuler</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">BOS
                                Bantuan Operasional Sekolah</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Sarana
                                & Prasarana</a>
                        </div>
                    </div>

                    <!-- Dropdown Kurikulum -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open"
                            class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-4 py-2 w-full text-left hover:bg-gray-100 text-sm">
                            Kurikulum
                            <svg class="inline w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
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
                            <a href="#"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Kurikulum
                                Sekolah</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Kalender
                                Pendidikan</a>
                            <a href="#"
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
                            <svg class="inline w-4 h-4 ml-1" fill="none" stroke="currentColor"
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
                            <a href="#"
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
                            <svg class="inline w-4 h-4 ml-1" fill="none" stroke="currentColor"
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
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Foto</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Video</a>
                        </div>
                    </div>

                    <!-- Dropdown Website Terkait -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open"
                            class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-4 py-2 w-full text-left hover:bg-gray-100 text-sm">
                            Website Terkait
                            <svg class="inline w-4 h-4 ml-1" fill="none" stroke="currentColor"
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
                    <a href="#"
                        class="text-[rgb(45,51,107)] font-semibold px-4 py-2 hover:bg-gray-100 text-sm">Kontak Kami</a>
                </div>
            </div>

            <!-- Menu untuk layar besar -->
            <div class="container flex-wrap justify-center hidden py-3 mx-auto space-x-2 uppercase md:flex">
                <!-- Beranda -->
                <a href="#" class="text-[rgb(45,51,107)] font-semibold px-2 py-1 relative group text-lg">
                    Beranda
                    <span
                        class="absolute inset-x-0 bottom-0 h-0.5 bg-blue-900 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                </a>

                <!-- Dropdown Profil -->
                <div x-data="{ open: false }" class="relative">
                    <button @mouseenter="open = true" @mouseleave="open = false"
                        class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-2 py-1 relative group text-lg">
                        Profil
                        <svg class="inline w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
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
                        class="absolute left-0 z-50 w-56 mt-1 rounded-md shadow-lg top-full ring-1 ring-black ring-opacity-5 focus:outline-none">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Visi &
                                Misi</a>
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">NPSN</a>
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Sejarah
                                Sekolah</a>
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Pendidik &
                                Tenaga Pendidik</a>
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Peserta
                                Didik</a>
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Prestasi
                                Sekolah</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Ekstrakurikuler</a>
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">BOS Bantuan
                                Operasional Sekolah</a>
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Sarana &
                                Prasarana</a>
                        </div>
                    </div>
                </div>

                <!-- Dropdown Kurikulum -->
                <div x-data="{ open: false }" class="relative">
                    <button @mouseenter="open = true" @mouseleave="open = false"
                        class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-2 py-1 relative group text-lg">
                        Kurikulum
                        <svg class="inline w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
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
                        class="absolute left-0 z-50 w-48 mt-1 rounded-md shadow-lg top-full ring-1 ring-black ring-opacity-5 focus:outline-none">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Kurikulum
                                Sekolah</a>
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Kalender
                                Pendidikan</a>
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Tugas
                                Siswa</a>
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Video
                                Pembelajaran Siswa</a>
                        </div>
                    </div>
                </div>

                <!-- Dropdown Pengumuman -->
                <div x-data="{ open: false }" class="relative">
                    <button @mouseenter="open = true" @mouseleave="open = false"
                        class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-2 py-1 relative group text-lg">
                        Pengumuman
                        <svg class="inline w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
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
                        class="absolute left-0 z-50 w-56 mt-1 rounded-md shadow-lg top-full ring-1 ring-black ring-opacity-5 focus:outline-none">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Berita
                                Sekolah</a>
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Pendaftaran
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
                        <svg class="inline w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
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
                        class="absolute left-0 z-50 w-56 mt-1 rounded-md shadow-lg top-full ring-1 ring-black ring-opacity-5 focus:outline-none">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Foto</a>
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Video</a>
                        </div>
                    </div>
                </div>

                <!-- Dropdown Website Terkait -->
                <div x-data="{ open: false }" class="relative">
                    <button @mouseenter="open = true" @mouseleave="open = false"
                        class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-2 py-1 relative group text-lg">
                        Website Terkait
                        <svg class="inline w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
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
                        class="absolute left-0 z-50 w-56 mt-1 rounded-md shadow-lg top-full ring-1 ring-black ring-opacity-5 focus:outline-none">
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
                <a href="#" class="text-[rgb(45,51,107)] font-semibold px-2 py-1 relative group text-lg">
                    Kontak Kami
                    <span
                        class="absolute inset-x-0 bottom-0 h-0.5 bg-blue-900 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                </a>
            </div>
        </div>
    </div>

    <!-- Kotak Gambar Tittle -->
    <div class="relative -mt-16 w-full h-80 md:h-[60vh] bg-cover bg-center"
        style="background-image: url('{{ asset('img/sekolah.jpg') }}');">
        <!-- Overlay-->
        <div class="absolute inset-0 bg-gradient-to-r from-gray-900/50 to-transparent"></div>
        <!-- Title-->
        <div
            class="absolute bottom-16 left-0 bg-[#E6EAF7] px-8 py-6 shadow-lg  z-10 w-[200px] flex items-center justify-center">
            <span class="text-2xl font-bold text-[#2D336B]">KURIKULUM</span>
        </div>
    </div>

    
    <!-- Konten Utama -->
    <div style="background-color: #2D336B;" class="w-[300px] shadow-md p-4 text-center mt-10 ml-8 rounded-md">
        <h1 class="text-xl font-bold text-white">TUGAS SISWA</h1>
    </div>

    <div class="container p-4 mx-auto bg-gray-100">
        <div class="grid grid-cols-1 gap-4 mt-4 sm:grid-cols-2 md:grid-cols-3">
            <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                <div class="w-full bg-gray-300 aspect-w-16 aspect-h-9"></div>
                <div class="py-2 font-semibold text-center text-white bg-blue-900">Kelas 1</div>
            </div>
            <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                <div class="w-full bg-gray-300 aspect-w-16 aspect-h-9"></div>
                <div class="py-2 font-semibold text-center text-white bg-blue-900">Kelas 2</div>
            </div>
            <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                <div class="w-full bg-gray-300 aspect-w-16 aspect-h-9"></div>
                <div class="py-2 font-semibold text-center text-white bg-blue-900">Kelas 3</div>
            </div>
            <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                <div class="w-full bg-gray-300 aspect-w-16 aspect-h-9"></div>
                <div class="py-2 font-semibold text-center text-white bg-blue-900">Kelas 4</div>
            </div>
            <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                <div class="w-full bg-gray-300 aspect-w-16 aspect-h-9"></div>
                <div class="py-2 font-semibold text-center text-white bg-blue-900">Kelas 5</div>
            </div>
            <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                <div class="w-full bg-gray-300 aspect-w-16 aspect-h-9"></div>
                <div class="py-2 font-semibold text-center text-white bg-blue-900">Kelas 6</div>
            </div>
        </div>
    </div>

    <!-- Breadcrumb Navigation -->
    <div class="flex items-center mt-10 mb-10 ml-8 space-x-2">
        <a href="/.."
                 class="bg-[#E6EAF7] text-[#2D336B] font-bold px-4 py-2 rounded-full shadow-md">Beranda</a>
        <span class="text-[#2D336B]">›</span>
        <a href="/kurikulum"
                class="bg-[#E6EAF7] text-[#2D336B] font-bold px-4 py-2 rounded-full shadow-md">Kurikulum</a>
        <span class="text-[#2D336B]">›</span>
        <a href="/kurikulum/tugas-siswa"
                class="bg-[#E6EAF7] text-[#2D336B] font-bold px-4 py-2 rounded-full shadow-md">Tugas Siswa</a>
    </div>

    <!-- Footer  -->
    <footer class="py-10 text-white bg-blue-900">
        <div class="container grid grid-cols-1 gap-8 px-6 mx-auto md:grid-cols-4">
            <!-- Logo and Address -->
            <div>
                <div class="container flex items-center mx-auto space-x-4">
                    <img src="/img/sd.png" alt="Logo SDN" class="mb-4 w-14">
                    <h2 class="mb-4 text-base font-bold">SDN BANDARHARJO 01<br>KOTA SEMARANG</h2>
                </div>
                <p>Jalan Cumi-cumi Raya No. 2<br>Bandarharjo</p>
                <p class="mt-2">📞 (024) 3551189</p>
                <p>✉️ sdnbandarharjo01@gmail.com</p>
                <div class="flex mt-4 space-x-2">
                    <img src="/img/pemkot.png" alt="Logo Pemerintah Kota Semarang" class="w-10">
                    <img src="/img/tutwuri.png" alt="Logo Tut Wuri Handayani" class="w-10">
                </div>
            </div>

            <!-- Profil -->
            <div>
                <h3 class="mb-2 font-bold">Profil</h3>
                <hr class="my-2 border-t border-white-300">
                <ul class="space-y-0 text-sm">
                    <li>Visi Misi Sekolah</li>
                    <li>NPSN</li>
                    <li>Sejarah Sekolah</li>
                    <li>Pendidik dan Tenaga Kependidikan</li>
                    <li>Peserta Didik</li>
                    <li>Prestasi Sekolah</li>
                    <li>Ekstrakurikuler</li>
                    <li>BOS Bantuan Operasional Sekolah</li>
                    <li>Sarana dan Prasarana</li>
                </ul>
            </div>

            <!-- Website Terkait -->
            <div>
                <h3 class="mb-2 font-bold">Website Terkait</h3>
                <hr class="my-2 border-t border-white-300">
                <ul class="space-y-0 text-sm">
                    <li>Kemendikbud</li>
                    <li>Pemkot Semarang</li>
                    <li>Dinas Pendidikan Kota Semarang</li>
                    <li>Sang Juara</li>
                    <li>Nomor Induk Siswa Nasional</li>
                    <li>DAPODIK</li>
                    <li>SIMPKB</li>
                </ul>
            </div>

            <!-- Kurikulum dan Kontak-->
            <div>
                <h3 class="mb-2 font-bold">Kurikulum</h3>
                <hr class="my-2 border-t border-white-300">
                <ul class="space-y-0 text-sm">
                    <li>Kurikulum Sekolah</li>
                    <li>Kalender Pendidikan</li>
                    <li>Tugas Siswa</li>
                    <li>Buku Elektronik Siswa</li>
                    <li>Video Pembelajaran Youtube</li>
                </ul>
                <br>
                <h3 class="mb-2 font-bold">Kontak</h3>
                <hr class="my-2 border-t border-white-300">
                <ul class="space-y-0 text-sm">
                    <li>Hubungi Kami</li>
                    <li>Pengaduan</li>
                </ul>
            </div>
        </div>
    </footer>
    
    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</body>
</html>
