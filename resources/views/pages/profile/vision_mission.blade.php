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

<body class="bg-gray-100 font-poppins">

    <!-- Header -->
    <nav style="background-color: #304193;" class="text-white p-2 md:p-4 flex justify-between items-center"></nav>
    <nav style="background-color: #2D336B;" class="text-white p-4 md:p-6 flex justify-between items-center">
        <!-- Logo dan Nama Sekolah -->
        <div class="flex items-center space-x-2 md:space-x-3 ml-2 md:ml-20">
            <img src="{{ asset('img/logo.png') }}" alt="Logo SDN Bandarharjo" class="w-15 h-12">
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
        class="shadow-md relative z-50 flex justify-between items-center p-4">


        <!-- Hamburger Menu (Muncul hanya ketika layar mode kecil/medium) -->
        <button @click="open = !open" @mouseenter="open = true" @mouseleave="open = open"
            class="md:hidden p-4 focus:outline-none ml-auto">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
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
                <a href="#"
                    class="text-[rgb(45,51,107)] font-semibold px-4 py-2 hover:bg-gray-100 text-sm">Beranda</a>

                <!-- Dropdown Profil -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                        class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-4 py-2 w-full text-left hover:bg-gray-100 text-sm">
                        Profil
                        <svg class="inline ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95" class="pl-4">
                        <a href="#" class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Visi &
                            Misi</a>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">NPSN</a>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Sejarah Sekolah</a>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Pendidik & Tenaga
                            Pendidik</a>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Peserta Didik</a>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Prestasi Sekolah</a>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Ekstrakurikuler</a>
                        <a href="#" class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">BOS
                            Bantuan Operasional Sekolah</a>
                        <a href="#" class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Sarana
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
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
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Video Pembelajaran
                            Siswa</a>
                    </div>
                </div>

                <!-- Dropdown Pengumuman -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                        class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-4 py-2 w-full text-left hover:bg-gray-100 text-sm">
                        Pengumuman
                        <svg class="inline ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
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
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Berita Sekolah</a>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Pendaftaran Peserta
                            Didik Baru</a>
                    </div>
                </div>

                <!-- Dropdown Lomba -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                        class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-4 py-2 w-full text-left hover:bg-gray-100 text-sm">
                        Lomba
                        <svg class="inline ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
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
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Lomba Membuat
                            Tulisan Motivasi</a>
                    </div>
                </div>

                <!-- Dropdown Galeri -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                        class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-4 py-2 w-full text-left hover:bg-gray-100 text-sm">
                        Galeri
                        <svg class="inline ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
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
                        <svg class="inline ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
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
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Pemkot Semarang</a>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Dinas Pendidikan
                            Kota Semarang</a>
                        <a href="#" class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Sang
                            Juara</a>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Nomor Induk Siswa
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
        <div class="hidden md:flex container mx-auto flex-wrap justify-center space-x-2 py-3 uppercase">
            <!-- Beranda -->
            <a href="#" class="text-[rgb(45,51,107)] font-semibold px-2 py-1 relative group text-sm">
                Beranda
                <span
                    class="absolute inset-x-0 bottom-0 h-0.5 bg-blue-900 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
            </a>

            <!-- Dropdown Profil -->
            <div x-data="{ open: false }" class="relative">
                <button @mouseenter="open = true" @mouseleave="open = false"
                    class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-2 py-1 relative group text-sm">
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
                        <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Visi & Misi</a>
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
                    class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-2 py-1 relative group text-sm">
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
                        <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Kurikulum
                            Sekolah</a>
                        <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Kalender
                            Pendidikan</a>
                        <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Tugas Siswa</a>
                        <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Video
                            Pembelajaran Siswa</a>
                    </div>
                </div>
            </div>

            <!-- Dropdown Pengumuman -->
            <div x-data="{ open: false }" class="relative">
                <button @mouseenter="open = true" @mouseleave="open = false"
                    class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-2 py-1 relative group text-sm">
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
                        <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Pendaftaran
                            Peserta Didik Baru</a>
                    </div>
                </div>
            </div>

            <!-- Dropdown Lomba -->
            <div x-data="{ open: false }" class="relative">
                <button @mouseenter="open = true" @mouseleave="open = false"
                    class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-2 py-1 relative group text-sm">
                    Lomba
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
                        <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Lomba Membuat
                            Tulisan Motivasi</a>
                    </div>
                </div>
            </div>

            <!-- Dropdown Galeri -->
            <div x-data="{ open: false }" class="relative">
                <button @mouseenter="open = true" @mouseleave="open = false"
                    class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-2 py-1 relative group text-sm">
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
                        <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Foto</a>
                        <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Video</a>
                    </div>
                </div>
            </div>

            <!-- Dropdown Website Terkait -->
            <div x-data="{ open: false }" class="relative">
                <button @mouseenter="open = true" @mouseleave="open = false"
                    class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-2 py-1 relative group text-sm">
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
                        <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Kemendikbud</a>
                    </div>
                </div>
            </div>
            <!-- Beranda -->
            <a href="#" class="text-[rgb(45,51,107)] font-semibold px-2 py-1 relative group text-sm">
                Kontak Kami
                <span
                    class="absolute inset-x-0 bottom-0 h-0.5 bg-blue-900 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
            </a>
        </div>
    </div>
    </div>
    <!-- Gambar Full Width -->
    <div class="w-full relative z-10">
        <div class="w-full md:w-full h-[40vh] md:h-[30vh] bg-white  mx-auto flex items-center justify-center p-4">
            <img src="{{ asset('img/slider 4.jpeg') }}" alt="Gambar 1" class="w-full h-full object-cover">
        </div>

    </div>



    <!-- Konten Utama -->
    <div class="bg-gray-100 flex items-center justify-center min-h-screen">
        <div class="container mx-auto p-5 pl-20 md:pl-40">
            <!-- Kotak PROFIL dan Visi Misi Sekolah -->
            <div class="flex flex-col md:flex-row space-y-5 md:space-y-0 md:space-x-5 mb-5">
                <div style="background-color: #2D336B;" class="w-[200px] shadow-md p-5 text-center">
                    <h1 class="text-xl font-bold text-white">PROFIL</h1>
                </div>
                <div style="background-color: #2D336B;"
                    class="w-[300px] shadow-md p-5 text-center transform md:translate-x-20">
                    <h1 class="text-xl font-bold text-white">Visi Misi Sekolah</h1>
                </div>
            </div>

            <!-- Garis Pembatas -->
            <div class="w-[200px] border-b-4 border-blue-900 mb-5"></div>

            <!-- Konten dan Sidebar -->
            <div class="flex flex-col md:flex-row">
                <!-- Sidebar Menu Profil -->
                <div style="background-color: #E6EAF7; color:#2D336B;" class="w-[250px] shadow-md p-5 mb-5 md:mb-0">
                    <h2 class="text-xl font-bold mb-4">Profil</h2>
                    <ul class="space-y-2">
                        <li><a href="#" class="block text-[#7886C7] hover:text-blue-900 font-semibold">Visi Misi
                                Sekolah</a></li>
                        <li><a href="#" class="block text-[#7886C7] hover:text-blue-900 font-semibold">NPSN</a>
                        </li>
                        <li><a href="#" class="block text-[#7886C7] hover:text-blue-900 font-semibold">Sejarah
                                Sekolah</a></li>
                        <li><a href="#" class="block text-[#7886C7] hover:text-blue-900 font-semibold">Pendidik
                                dan Tenaga Kependidikan</a></li>
                        <li><a href="#" class="block text-[#7886C7] hover:text-blue-900 font-semibold">Peserta
                                Didik</a></li>
                        <li><a href="#" class="block text-[#7886C7] hover:text-blue-900 font-semibold">Prestasi
                                Sekolah</a></li>
                        <li><a href="#"
                                class="block text-[#7886C7] hover:text-blue-900 font-semibold">Ekstrakurikuler</a></li>
                        <li><a href="#" class="block text-[#7886C7] hover:text-blue-900 font-semibold">BOS
                                Bantuan Operasional Sekolah</a></li>
                        <li><a href="#" class="block text-[#7886C7] hover:text-blue-900 font-semibold">Sarana
                                dan Prasarana</a></li>
                    </ul>
                </div>

                <!-- Konten -->
                <div class="w-full md:w-3/4 p-5 md:ml-5 bg-gray-100 rounded-lg">
                    <div class="mt-4">
                        <h2 style="background-color: #E6EAF7; color:#2D336B;"
                            class="text-xl font-bold px-3 py-1 inline-block rounded shadow-md">Visi</h2>
                        <p class="mt-2 text-[rgb(45,51,107)] pl-2 font-semibold">Terwujudnya Peserta Didik yang
                            Bertaqwa, Santun, Terampil, Cerdas, Berprestasi, Ramah serta Berwawasan Budaya Lingkungan
                        </p>
                    </div>
                    <div class="mt-4">
                        <h2 style="background-color: #E6EAF7; color:#2D336B;"
                            class="text-xl font-bold px-3 py-1 inline-block rounded shadow-md">Misi</h2>
                        <ul class="list-decimal list-inside mt-2 pl-2 space-y-2 text-[rgb(45,51,107)] font-semibold">
                            <li>Melaksanakan pendidikan dan pembelajaran untuk mengembangkan ketakwaan terhadap Tuhan
                                Yang Maha Esa</li>
                            <li>Menumbuhkan budaya tertib, disiplin, santun dalam ucapan, sopan dalam perilaku terhadap
                                sesama berdasarkan iman dan taqwa</li>
                            <li>Menumbuhkan kreativitas dan inovasi di bidang akademik, prestasi dan keterampilan</li>
                            <li>Menumbuhkan semangat berprestasi dan budaya kompetitif yang jujur, sportif bagi seluruh
                                warga sekolah dalam berlomba meraih prestasi</li>
                            <li>Melaksanakan pendidikan dan pembelajaran yang ramah</li>
                            <li>Melaksanakan pendidikan dan pembelajaran yang berwawasan budaya lingkungan</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Breadcrumb Navigation -->
            <div class="flex items-center space-x-2 mt-10">
                <a href="#"
                    class="bg-[#E6EAF7] text-[#2D336B] font-bold px-4 py-2 rounded-full shadow-md">Beranda</a>
                <span class="text-[#2D336B]">›</span>
                <a href="#"
                    class="bg-[#E6EAF7] text-[#2D336B] font-bold px-4 py-2 rounded-full shadow-md">Profil</a>
                <span class="text-[#2D336B]">›</span>
                <a href="#" class="bg-[#E6EAF7] text-[#2D336B] font-bold px-4 py-2 rounded-full shadow-md">Visi
                    Misi</a>
            </div>
        </div>
    </div>


    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>

</html>
