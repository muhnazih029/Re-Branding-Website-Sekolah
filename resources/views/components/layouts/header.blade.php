<header class="fixed top-0 left-0 z-50 w-full">

    <!-- Header -->
    <nav style="background-color: #304193;" class="flex items-center justify-between p-2 text-white md:p-4"></nav>
    <nav style="background-color: #2D336B;" class="flex items-center justify-between p-4 text-white md:p-6">
        <!-- Logo dan Nama Sekolah -->
        <div class="flex items-center ml-2 space-x-2 md:space-x-3 md:ml-20">
            <!-- Logo -->
            <img src="{{ asset('img/sd.png') }}" alt="Logo SDN Bandarharjo" class="h-12 w-15 ">
            <!-- Nama Sekolah -->
            <div class="flex flex-col">
                <span class="text-sm font-semibold md:text-lg">SDN BANDARHARJO 01</span>
                <span class="text-sm font-semibold md:text-lg">KOTA SEMARANG</span>
            </div>
        </div>

        <!-- Tombol Gabung/Keluar -->
        @if (Auth::check())
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" style="color: #2D336B;"
                    class="px-3 py-1 mr-2 text-sm font-bold bg-white rounded-full md:px-4 md:py-2 md:mr-20 md:text-base">
                    Keluar
                </button>
            </form>
        @else
            <a href="{{ filament()->getLoginUrl() }}" style="color: #2D336B;"
                class="px-3 py-1 mr-2 text-sm font-bold bg-white rounded-full md:px-4 md:py-2 md:mr-20 md:text-base">
                Gabung
            </a>
        @endif
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
                <a href="{{ route('home') }}"
                    class="text-[rgb(45,51,107)] font-semibold px-4 py-2 hover:bg-gray-100 text-sm">Beranda</a>

                <!-- Dropdown Profil -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                        class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-4 py-2 w-full text-left hover:bg-gray-100 text-sm">
                        Profil
                        <svg class="inline w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
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
                        <a href="{{ route('profile.vision_mission') }}"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Visi &
                            Misi</a>
                        <a href="https://referensi.data.kemdikbud.go.id/tabs.php?npsn=20329336"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">NPSN</a>
                        <a href="{{ route('profile.history') }}"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Sejarah
                            Sekolah</a>
                        <a href="{{ route('profile.teachers') }}"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Pendidik &
                            Tenaga
                            Pendidik</as>
                            <a href="{{ route('profile.students') }}"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Peserta
                                Didik</a>
                            <a href="{{ route('profile.extracurricular') }}"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Ekstrakurikuler</a>
                            <a href="{{ route('profile.dana_bos') }}"
                                class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Bantuan
                                Operasional Sekolah</a>
                            <a href="{{ route('profile.facility') }}"
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
                        <a href="{{ route('kurikulum.school_curriculum') }}"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Kurikulum
                            Sekolah</a>
                        <a href="{{ route('kurikulum.calendar') }}"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Kalender
                            Pendidikan</a>
                        <a href="{{ route('kurikulum.homework') }}"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Tugas Siswa</a>
                        <a href="{{ route('kurikulum.learning_videos') }}"
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
                        <svg class="inline w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
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
                        <a href="{{ route('announcement.index', ['type' => 'announcement']) }}"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Berita Sekolah</a>
                        <a href="{{ route('announcement.index', ['type' => 'competition']) }}"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Lomba</a>
                        <a href="{{ route('announcement.index', ['type' => 'news']) }}"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Prestasi
                            Sekolah</a>
                        <a href="{{ route('announcement.new_student') }}"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Pendaftaran
                            Peserta Didik Baru</a>
                    </div>
                </div>

                <!-- Dropdown Galeri -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                        class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-4 py-2 w-full text-left hover:bg-gray-100 text-sm">
                        Galeri
                        <svg class="inline w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
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
                        <a href="{{ route('galery.photo') }}"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Foto</a>
                        <a href="{{ route('galery.video') }}"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Video</a>
                    </div>
                </div>

                <!-- Dropdown Website Terkait -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                        class="text-[rgb(45,51,107)] font-semibold focus:outline-none uppercase px-4 py-2 w-full text-left hover:bg-gray-100 text-sm">
                        Website Terkait
                        <svg class="inline w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
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
                        <a href="https://kemdiktisaintek.go.id/"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Kemendikbud</a>
                        <a href="https://semarangkota.go.id/"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Pemkot
                            Semarang</a>
                        <a href="https://disdiksmg.semarangkota.go.id/"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Dinas
                            Pendidikan
                            Kota Semarang</a>
                        <a href="https://sangjuara.semarangkota.go.id/"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Sang
                            Juara</a>
                        <a href="https://nisn.data.kemdikbud.go.id/"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Nomor Induk
                            Siswa
                            Nasional</a>
                        <a href="https://dapo.dikdasmen.go.id/"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">Dapodik</a>
                        <a href="https://paspor-gtk.simpkb.id/casgpo/login?service=https%3A%2F%2Fgtk.belajar.dikdasmen.go.id%2Fauth%2Flogin"
                            class="block px-4 py-2 text-sm text-[rgb(45,51,107)] hover:bg-gray-100">SIMPKB</a>
                    </div>
                </div>
                <!-- Kontak Kami -->
                <a href="{{ route('contact') }}"
                    class="text-[rgb(45,51,107)] font-semibold px-4 py-2 hover:bg-gray-100 text-sm">Kontak Kami</a>
            </div>
        </div>

        <!-- Menu untuk layar besar -->
        <div class="container flex-wrap justify-center hidden py-3 mx-auto space-x-2 uppercase md:flex">
            <!-- Beranda -->
            <a href="{{ route('home') }}"
                class="text-[rgb(45,51,107)] font-semibold px-2 py-1 relative group text-lg">
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
                        <a href="{{ route('profile.vision_mission') }}"
                            class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Visi
                            &
                            Misi</a>
                        <a href="https://referensi.data.kemdikbud.go.id/tabs.php?npsn=20329336"
                            class="block px-4 py-2 text-sm text-white hover:bg-blue-900">NPSN</a>
                        <a href="{{ route('profile.history') }}"
                            class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Sejarah
                            Sekolah</a>
                        <a href="{{ route('profile.teachers') }}"
                            class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Pendidik &
                            Tenaga Pendidik</a>
                        <a href="{{ route('profile.students') }}"
                            class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Peserta
                            Didik</a>
                        <a href="{{ route('profile.extracurricular') }}"
                            class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Ekstrakurikuler</a>
                        <a href="{{ route('profile.dana_bos') }}"
                            class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Bantuan
                            Operasional Sekolah</a>
                        <a href="{{ route('profile.facility') }}"
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
                        <a href="{{ route('kurikulum.school_curriculum') }}"
                            class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Kurikulum Sekolah</a>
                        <a href="{{ route('kurikulum.calendar') }}"
                            class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Kalender Pendidikan</a>
                        <a href="{{ route('kurikulum.homework') }}"
                            class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Tugas Siswa</a>
                        <a href="{{ route('kurikulum.learning_videos') }}"
                            class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Video Pembelajaran Siswa</a>
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
                        <a href="{{ route('announcement.index', ['type' => 'announcement']) }}"
                            class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Berita Sekolah</a>
                        <a href="{{ route('announcement.index', ['type' => 'competition']) }}"
                            class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Lomba</a>
                        <a href="{{ route('announcement.index', ['type' => 'news']) }}"
                            class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Prestasi Sekolah</a>
                        <a href="{{ route('announcement.new_student') }}"
                            class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Pendaftaran
                            Peserta Didik Baru</a>
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
                        <a href="{{ route('galery.photo') }}"
                            class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Foto</a>
                        <a href="{{ route('galery.video') }}"
                            class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Video</a>
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
                        <a href="https://kemdiktisaintek.go.id/"
                            class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Kemendikbud</a>
                        <a href="https://semarangkota.go.id/"
                            class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Pemkot
                            Semarang</a>
                        <a href="https://disdiksmg.semarangkota.go.id/"
                            class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Dinas
                            Pendidikan Kota Semarang</a>
                        <a href="https://sangjuara.semarangkota.go.id/"
                            class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Sang
                            Juara</a>
                        <a href="https://nisn.data.kemdikbud.go.id/"
                            class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Nomor Induk
                            Siswa Nasional</a>
                        <a href="https://dapo.dikdasmen.go.id/"
                            class="block px-4 py-2 text-sm text-white hover:bg-blue-900">Dapodik</a>
                        <a href="https://paspor-gtk.simpkb.id/casgpo/login?service=https%3A%2F%2Fgtk.belajar.dikdasmen.go.id%2Fauth%2Flogin"
                            class="block px-4 py-2 text-sm text-white hover:bg-blue-900">SIMPKB</a>
                    </div>
                </div>
            </div>
            <!-- Kontak Kami -->
            <a href="{{ route('contact') }}"
                class="text-[rgb(45,51,107)] font-semibold px-2 py-1 relative group text-lg">
                Kontak Kami
                <span
                    class="absolute inset-x-0 bottom-0 h-0.5 bg-blue-900 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
            </a>
        </div>
    </div>
</header>
