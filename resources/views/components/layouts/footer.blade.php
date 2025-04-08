<!-- Footer  -->
<footer class="py-10 text-white" style="background-color: #2D336B">
    <div class="container grid grid-cols-1 gap-8 px-6 mx-auto md:grid-cols-4">
        <!-- Logo and Address -->
        <div>
            <div class="container flex items-center mx-auto space-x-4">
                <img src="/img/sd.png" alt="Logo SDN" class="mb-4 w-14">
                <h2 class="mb-4 text-base font-bold">SDN BANDARHARJO 01<br>KOTA SEMARANG</h2>
            </div>
            <p><a href="https://maps.app.goo.gl/XrDpGJWcdp4VWtRr6" class="hover:text-yellow-400"> Jl. Cumi-cumi Raya No. 2<br>Bandarharjo, Kec. Semarang Utara<br>Kota Semarang, Jawa Tengah</a></p>
            <p class="mt-2">📞 (024) 3551189</p>
            <p><a href="mailto:sdnbandarharjo01@gmail.com" class="hover:text-yellow-400">✉️ sdnbandarharjo01@gmail.com</a></p>
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
                <li><a href="{{ route('profile.vision_mission') }}" class="hover:text-yellow-400">Visi Misi Sekolah</a></li>
                <li><a href="https://referensi.data.kemdikbud.go.id/tabs.php?npsn=20329336" class="hover:text-yellow-400">NPSN</a></li>
                <li><a href="{{ route('profile.history') }}" class="hover:text-yellow-400">Sejarah Sekolah</a></li>
                <li><a href="{{ route('profile.teachers') }}" class="hover:text-yellow-400"">Pendidik dan Tenaga Kependidikan</a></li>
                <li><a href="{{ route('profile.students') }}" class="hover:text-yellow-400">Peserta Didik</a></li>
                <li><a href="{{ route('profile.extracurricular') }}" class="hover:text-yellow-400">Ekstrakurikuler</a></li>
                <li><a href="{{ route('profile.dana_bos') }}" class="hover:text-yellow-400">BOS Bantuan Operasional Sekolah</a></li>
                <li><a href="{{ route('profile.facility') }}" class="hover:text-yellow-400">Sarana dan Prasarana</a></li>
            </ul>
        </div>

        <!-- Website Terkait -->
        <div>
            <h3 class="mb-2 font-bold">Website Terkait</h3>
            <hr class="my-2 border-t border-white-300">
            <ul class="space-y-0 text-sm">
                <li><a href="https://kemdiktisaintek.go.id/" class="hover:text-yellow-400">Kemendikbud</a></li>
                <li><a href="https://semarangkota.go.id/" class="hover:text-yellow-400">Pemkot Semarang</a></li>
                <li><a href="https://disdiksmg.semarangkota.go.id/" class="hover:text-yellow-400">Dinas Pendidikan Kota Semarang</a></li>
                <li><a href="https://sangjuara.semarangkota.go.id/" class="hover:text-yellow-400">Sang Juara</a></li>
                <li><a href="https://nisn.data.kemdikbud.go.id/" class="hover:text-yellow-400">Nomor Induk Siswa Nasional</a></li>
                <li><a href="https://dapo.dikdasmen.go.id/" class="hover:text-yellow-400">Dapodik</li>
                <li><a href="https://paspor-gtk.simpkb.id/casgpo/login?service=https%3A%2F%2Fgtk.belajar.dikdasmen.go.id%2Fauth%2Flogin" class="hover:text-yellow-400">SIMPKB</a></li>
            </ul>
        </div>

        <!-- Kurikulum dan Kontak-->
        <div>
            <h3 class="mb-2 font-bold">Kurikulum</h3>
            <hr class="my-2 border-t border-white-300">
            <ul class="space-y-0 text-sm">
                <li><a href="{{ route('kurikulum.school_curriculum') }}" class="hover:text-yellow-400">Kurikulum Sekolah</a></li>
                <li><a href="{{ route('kurikulum.calendar') }}" class="hover:text-yellow-400">Kalender Pendidikan</a></li>
                <li><a href="{{ route('kurikulum.homework') }}" class="hover:text-yellow-400">Tugas Siswa</a></li>
                <li><a href="{{ route('kurikulum.learning_videos') }}" class="hover:text-yellow-400">Video Pembelajaran Siswa</a></li>
            </ul>
            <br>
            <h3 class="mb-2 font-bold">Kontak</h3>
            <hr class="my-2 border-t border-white-300">
            <ul class="space-y-0 text-sm">
                <li><a href="{{ route('contact') }}" class="hover:text-yellow-400">Hubungi Kami</a></li>
                <li><a href="{{ route('contact') }} #pengaduan" class="hover:text-yellow-400">Pengaduan</a></li>
            </ul>
        </div>
    </div>
</footer>
<footer style="background-color: #304193;" class="flex justify-center gap-4 p-2 text-white md:p-4">
    <a class="hover:text-yellow-400" aria-label="Visit TrendyMinds Facebook" href="https://id-id.facebook.com/sdbandarharjo.negeri/" target="_blank"><svg
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="h-6">
            <path fill="currentColor"
                d="m279.14 288 14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
            </path>
        </svg>
    </a>
    <a class=" hover:text-yellow-400" aria-label="Visit TrendyMinds YouTube" href="https://www.youtube.com/channel/UC4s4UjNNJ5eO6MJrtgck2wQ" target="_blank"><svg
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-6">
            <path fill="currentColor"
                d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
            </path>
        </svg>
    </a>
    <a class=" hover:text-yellow-400" aria-label="Visit TrendyMinds Instagram" href="https://www.instagram.com/sdnbandarharjo01" target="_blank"><svg
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-6">
            <path fill="currentColor"
                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
            </path>
        </svg>
    </a>
    SDN Bandarharjo 01 Kota Semarang
</footer>
