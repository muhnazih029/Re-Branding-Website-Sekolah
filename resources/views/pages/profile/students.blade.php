<x-layouts>
    <x-layouts.header />
    <x-profiles.hero />

    <!-- Konten Utama -->
    <div class="flex items-center justify-center min-h-screen mt-4 bg-gray-100 ">
        <div class="container p-5 pl-10 mx-auto md:pl-20">
            <!-- Kotak PROFIL dan Peserta Didik-->
            <div class="flex flex-col mb-5 space-y-5 md:flex-row md:items-start md:space-x-5 md:space-y-0">
                <div style="background-color: #2D336B;" class="w-[200px] shadow-md p-5 text-center">
                    <h1 class="text-xl font-bold text-white">PROFIL</h1>
                </div>
                <div style="background-color: #2D336B;" class="w-[300px] shadow-md p-5 text-center md:ml-5 md:mt-0 mt-0">
                    <h1 class="text-xl font-bold text-white">Peserta Didik</h1>
                </div>
            </div>

            <!-- Garis Pembatas -->
            <div class="w-[200px] border-b-4 border-blue-900 mb-5"></div>

            <!-- Konten dan Sidebar -->
            <div class="flex flex-col md:flex-row">
                <!-- Sidebar Menu Profil -->
                <div style="background-color: #E6EAF7; color:#2D336B;"
                    class="w-[250px] h-[45vh] shadow-md p-5 mb-5 md:mb-0">
                    <h2 class="mb-4 text-xl font-bold">Profil</h2>
                    <ul class="space-y-2">
                        <li><a href="profile/visi-misi"
                                class="block text-[#7886C7] hover:text-blue-900 font-semibold">Visi Misi
                                Sekolah</a></li>
                        <li><a href="https://referensi.data.kemdikbud.go.id/tabs.php?npsn=20329336"
                                class="block text-[#7886C7] hover:text-blue-900 font-semibold">NPSN</a>
                        </li>
                        <li><a href="/profile/sejarah/sekolah"
                                class="block text-[#7886C7] hover:text-blue-900 font-semibold">Sejarah
                                Sekolah</a></li>
                        <li><a href="/profile/pendidik"
                                class="block text-[#7886C7] hover:text-blue-900 font-semibold">Pendidik
                                dan Tenaga Kependidikan</a></li>
                        <li><a href="/profile/peserta-didik"
                                class="block text-[#7886C7] hover:text-blue-900 font-semibold">Peserta
                                Didik</a></li>
                        <li><a href="/profile/ekstrakulikuler"
                                class="block text-[#7886C7] hover:text-blue-900 font-semibold">Ekstrakurikuler</a></li>
                        <li><a href="/profile/dana-bos"
                                class="block text-[#7886C7] hover:text-blue-900 font-semibold">BOS
                                Bantuan Operasional Sekolah</a></li>
                        <li><a href="/profile/sarana-prasarana"
                                class="block text-[#7886C7] hover:text-blue-900 font-semibold">Sarana
                                dan Prasarana</a></li>
                    </ul>
                </div>

                <!-- Konten -->
                <div class="w-full p-5 bg-gray-100 rounded-lg md:w-3/4 md:ml-5">
                    <div class="h-full mt-4">
                        <!-- Grid Kelas -->
                        <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
                            @foreach ($classes as $class)
                                <!-- Kartu Kelas -->
                                <div class="relative flex flex-col overflow-hidden bg-white rounded-lg shadow-md">
                                    <!-- Label Jumlah Siswa -->
                                    <div
                                        class="absolute top-2 left-2 bg-[#7886C7] text-white text-md font-semibold py-1 px-3 rounded-lg shadow">
                                        {{ $class->student_count }} Siswa
                                    </div>
                                    <!-- Thumbnail Kelas -->
                                    <div class="w-full h-48 overflow-hidden bg-gray-300 rounded-t-lg">
                                        <img src="{{ Storage::url($class->image ?? 'default.jpg') }}"
                                            alt="Gambar Kelas {{ $class->class_name }}"
                                            class="object-cover w-full h-full">
                                    </div>
                                    <!-- Konten Kelas -->
                                    <div class="flex flex-col flex-grow p-4">
                                        <!-- Judul Kelas -->
                                        <h2 class="mx-auto text-xl font-bold text-blue-900">Kelas
                                            {{ strtoupper($class->class_name) }}</h2>
                                        <!-- Tombol Baca Selengkapnya -->
                                        <a href="{{ route('students.show', ['id' => $class->id]) }}"
                                            class="inline-block px-4 py-2 mx-auto mt-4 text-sm font-semibold text-white transition duration-300 bg-blue-900 rounded-lg hover:bg-blue-800 w-fit">
                                            Selengkapnya
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <x-breadcrumb />
        </div>
    </div>
    <x-layouts.footer />
</x-layouts>
