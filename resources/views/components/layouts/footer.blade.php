<!-- Footer -->
<footer class="py-10 text-white bg-[#2D336B]">
    <div class="container grid grid-cols-1 gap-8 px-6 mx-auto md:grid-cols-4">
        <!-- Logo and Address -->
        <div>
            <div class="flex items-center mb-4 space-x-4">
                <img src="/img/sd.png" alt="Logo SDN" class="w-14">
                <h2 class="text-base font-bold leading-tight">
                    SDN BANDARHARJO 01<br>
                    KOTA SEMARANG
                </h2>
            </div>
            <!-- Google Maps -->
            <div class="mb-4 overflow-hidden rounded-lg h-36">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.279031022576!2d110.4141943152946!3d-6.966763294978856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNTgnMDAuNCJTIDExMMKwMjQnNTUuMSJF!5e0!3m2!1sen!2sid!4v1621234567890!5m2!1sen!2sid"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
            <!-- Contact -->
            <div class="flex flex-col justify-center gap-2">
                <h3 class="text-lg font-semibold">Kontak Kami</h3>
                <p class="flex ">
                    <span class="mr-2">📍</span>
                    <span>{{ $footerSettings['contact_alamat']->value ?? 'Jl. Contoh Alamat, Semarang' }}</span>
                </p>
                <p>📞 {{ $footerSettings['contact_telp']->value ?? '(024) 3551189' }}</p>
                <p>✉️ {{ $footerSettings['contact_email']->value ?? 'sdnbandarharjo01@gmail.com' }}</p>
                <!-- Social Media -->
                <div class="flex gap-3 mt-2">
                    <a href="{{ $footerSettings['contact_facebook']->value ?? 'https://id-id.facebook.com/sdbandarharjo.negeri' }}"
                        target="_blank" aria-label="Facebook"
                        class="transition-colors duration-200 hover:text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="h-6">
                            <path fill="currentColor"
                                d="m279.14 288 14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                            </path>
                        </svg>
                    </a>
                    <a href="{{ $footerSettings['contact_youtube']->value ?? 'https://www.youtube.com/channel/UC4s4UjNNJ5eO6MJrtgck2wQ' }}"
                        target="_blank" aria-label="YouTube"
                        class="transition-colors duration-200 hover:text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-6">
                            <path fill="currentColor"
                                d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                            </path>
                        </svg>
                    </a>
                    <a href="{{ $footerSettings['contact_instagram']->value ?? 'https://www.instagram.com/sdnbandarharjo01' }}"
                        target="_blank" aria-label="Instagram"
                        class="transition-colors duration-200 hover:text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-6">
                            <path fill="currentColor"
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- Menu Section -->
        <div class="md:col-span-3">
            <!-- First Row: Profile, Curriculum, Related Websites -->
            <div class="flex flex-col gap-8 md:flex-row">
                <!-- Profile -->
                <div class="flex-1">
                    <h3 class="mb-2 font-bold">Profil</h3>
                    <hr class="my-2 border-t border-white-300">
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('profile.vision_mission') }}"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">Visi Misi
                                Sekolah</a></li>
                        <li><a href="https://referensi.data.kemdikbud.go.id/tabs.php?npsn=20329336"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">NPSN</a></li>
                        <li><a href="{{ route('profile.history') }}"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">Sejarah
                                Sekolah</a></li>
                        <li><a href="{{ route('profile.teachers') }}"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">Pendidik dan
                                Tenaga Kependidikan</a></li>
                        <li><a href="{{ route('profile.students') }}"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">Peserta Didik</a>
                        </li>
                        <li><a href="{{ route('profile.extracurricular') }}"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">Ekstrakurikuler</a>
                        </li>
                        <li><a href="{{ route('profile.dana_bos') }}"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">BOS Bantuan
                                Operasional Sekolah</a></li>
                        <li><a href="{{ route('profile.facility') }}"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">Sarana dan
                                Prasarana</a></li>
                    </ul>
                </div>
                <!-- Curriculum -->
                <div class="flex-1">
                    <h3 class="mb-2 font-bold">Kurikulum</h3>
                    <hr class="my-2 border-t border-white-300">
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('kurikulum.school_curriculum') }}"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">Kurikulum
                                Sekolah</a></li>
                        <li><a href="{{ route('kurikulum.calendar') }}"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">Kalender
                                Pendidikan</a></li>
                        <li><a href="{{ route('kurikulum.homework') }}"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">Tugas Siswa</a>
                        </li>
                        <li><a href="{{ route('kurikulum.learning_videos') }}"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">Video Pembelajaran
                                Siswa</a></li>
                    </ul>
                </div>
                <!-- Related Websites -->
                <div class="flex-1">
                    <h3 class="mb-2 font-bold">Website Terkait</h3>
                    <hr class="my-2 border-t border-white-300">
                    <ul class="space-y-2 text-sm">
                        <li><a href="https://kemdiktisaintek.go.id/"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">Kemendikbud</a>
                        </li>
                        <li><a href="https://semarangkota.go.id/"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">Pemkot
                                Semarang</a></li>
                        <li><a href="https://disdiksmg.semarangkota.go.id/"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">Dinas Pendidikan
                                Kota Semarang</a></li>
                        <li><a href="https://sangjuara.semarangkota.go.id/"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">Sang Juara</a>
                        </li>
                        <li><a href="https://nisn.data.kemdikbud.go.id/"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">Nomor Induk Siswa
                                Nasional</a></li>
                        <li><a href="https://dapo.dikdasmen.go.id/"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">Dapodik</a></li>
                        <li><a href="https://paspor-gtk.simpkb.id/casgpo/login?service=https%3A%2F%2Fgtk.belajar.dikdasmen.go.id%2Fauth%2Flogin"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">SIMPKB</a></li>
                    </ul>
                </div>
            </div>
            <!-- Second Row: Gallery, Announcements, Contact -->
            <div class="flex flex-col gap-8 mt-8 md:flex-row">
                <!-- Gallery -->
                <div class="flex-1">
                    <h3 class="mb-2 font-bold">Galeri</h3>
                    <hr class="my-2 border-t border-white-300">
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('galery.photo') }}"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">Foto</a></li>
                        <li><a href="{{ route('galery.photo') }}"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">Video</a></li>
                    </ul>
                </div>
                <!-- Announcements -->
                <div class="flex-1">
                    <h3 class="mb-2 font-bold">Pengumuman</h3>
                    <hr class="my-2 border-t border-white-300">
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('announcement.index', ['alias' => 'berita-sekolah']) }}"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">Berita
                                Sekolah</a></li>
                        <li><a href="{{ route('announcement.index', ['alias' => 'lomba']) }}"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">Lomba</a></li>
                        <li><a href="{{ route('announcement.index', ['alias' => 'prestasi-sekolah']) }}"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">Prestasi
                                Sekolah</a></li>
                        <li><a href="{{ route('announcement.new_student') }}"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">PPDB</a></li>
                    </ul>
                </div>
                <!-- Contact -->
                <div class="flex-1">
                    <h3 class="mb-2 font-bold">Kontak</h3>
                    <hr class="my-2 border-t border-white-300">
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('contact') }}"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">Hubungi Kami</a>
                        </li>
                        <li><a href="{{ route('contact') }}#pengaduan"
                                class="text-gray-300 transition-colors duration-200 hover:text-white">Pengaduan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<footer class="flex flex-col items-center justify-center gap-2 p-2 text-white bg-[#304193] md:flex-row">
    <div class="text-sm text-center md:text-left">
        © 2025 SDN Bandarharjo 01 Kota Semarang. All rights reserved.
    </div>
</footer>
