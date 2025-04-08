<!-- Footer  -->
<footer class="py-10 text-white" style="background-color: #2D336B">
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
                <li><a href="{{ route('profile.vision_mission') }}">Visi Misi Sekolah</a></li>
                <li><a href="https://referensi.data.kemdikbud.go.id/tabs.php?npsn=20329336">NPSN</a></li>
                <li><a href="{{ route('profile.history') }}">Sejarah Sekolah</a></li>
                <li><a href="{{ route('profile.teachers') }}">Pendidik dan Tenaga Kependidikan</a></li>
                <li><a href="{{ route('profile.students') }}">Peserta Didik</a></li>
                <li><a href="{{ route('profile.extracurricular') }}">Ekstrakurikuler</a></li>
                <li><a href="{{ route('profile.dana_bos') }}">BOS Bantuan Operasional Sekolah</a></li>
                <li><a href="{{ route('profile.facility') }}">Sarana dan Prasarana</a></li>
            </ul>
        </div>

        <!-- Website Terkait -->
        <div>
            <h3 class="mb-2 font-bold">Website Terkait</h3>
            <hr class="my-2 border-t border-white-300">
            <ul class="space-y-0 text-sm">
                <li><a href="https://kemdiktisaintek.go.id/">Kemendikbud</a></li>
                <li><a href="https://semarangkota.go.id/">Pemkot Semarang</a></li>
                <li><a href="https://disdiksmg.semarangkota.go.id/">Dinas Pendidikan Kota Semarang</a></li>
                <li><a href="https://sangjuara.semarangkota.go.id/">Sang Juara</a></li>
                <li><a href="https://nisn.data.kemdikbud.go.id/">Nomor Induk Siswa Nasional</a></li>
                <li><a href="https://dapo.dikdasmen.go.id/">Dapodik</li>
                <li><a
                        href="https://paspor-gtk.simpkb.id/casgpo/login?service=https%3A%2F%2Fgtk.belajar.dikdasmen.go.id%2Fauth%2Flogin">SIMPKB</a>
                </li>
            </ul>
        </div>

        <!-- Kurikulum dan Kontak-->
        <div>
            <h3 class="mb-2 font-bold">Kurikulum</h3>
            <hr class="my-2 border-t border-white-300">
            <ul class="space-y-0 text-sm">
                <li><a href="{{ route('kurikulum.school_curriculum') }}">Kurikulum Sekolah</a></li>
                <li><a href="{{ route('kurikulum.calendar') }}">Kalender Pendidikan</a></li>
                <li><a href="{{ route('kurikulum.homework') }}">Tugas Siswa</a></li>
                <li><a href="{{ route('kurikulum.learning_videos') }}">Video Pembelajaran Siswa</li>
            </ul>
            <br>
            <h3 class="mb-2 font-bold">Kontak</h3>
            <hr class="my-2 border-t border-white-300">
            <ul class="space-y-0 text-sm">
                <li><a href="{{ route('contact') }}">Hubungi Kami</a></li>
                <li>Pengaduan</li>
            </ul>
        </div>
    </div>
</footer>
<footer style="background-color: #304193;" class="flex items-center justify-between p-2 text-white md:p-4"></footer>
