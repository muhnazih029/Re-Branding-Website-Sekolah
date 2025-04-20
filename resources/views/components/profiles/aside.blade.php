<div style="background-color: #E6EAF7;"
    class="w-[250px] h-[fit-content] max-h-[80vh] overflow-y-auto shadow-md p-5 mb-5 md:mb-0">
    <h2 class="mb-4 text-xl font-bold">Profil</h2>
    <ul class="space-y-2">
        <li>
            <a href="{{ route('profile.vision_mission') }}"
                class="block {{ request()->routeIs('profile.vision_mission') ? 'text-[#2D336B]' : 'text-[#7886C7]' }} hover:text-blue-900 font-semibold">
                Visi Misi Sekolah
            </a>
        </li>
        <li>
            <a href="https://referensi.data.kemdikbud.go.id/tabs.php?npsn=20329336" target="_blank"
                class="block text-[#7886C7] hover:text-blue-900 font-semibold">
                NPSN
            </a>
        </li>
        <li>
            <a href="{{ route('profile.history') }}"
                class="block {{ request()->routeIs('profile.history') ? 'text-[#2D336B]' : 'text-[#7886C7]' }} hover:text-blue-900 font-semibold">
                Sejarah Sekolah
            </a>
        </li>
        <li>
            <a href="{{ route('profile.teachers') }}"
                class="block {{ request()->routeIs('profile.teachers') ? 'text-[#2D336B]' : 'text-[#7886C7]' }} hover:text-blue-900 font-semibold">
                Pendidik dan Tenaga Kependidikan
            </a>
        </li>
        <li>
            <a href="{{ route('profile.students') }}"
                class="block {{ request()->routeIs('profile.students') || request()->routeIs('students.show') ? 'text-[#2D336B]' : 'text-[#7886C7]' }} hover:text-blue-900 font-semibold">
                Peserta Didik
            </a>
        </li>
        <li>
            <a href="{{ route('profile.extracurricular') }}"
                class="block {{ request()->routeIs('profile.extracurricular') ? 'text-[#2D336B]' : 'text-[#7886C7]' }} hover:text-blue-900 font-semibold">
                Ekstrakurikuler
            </a>
        </li>
        <li>
            <a href="{{ route('profile.dana_bos') }}"
                class="block {{ request()->routeIs('profile.dana_bos') ? 'text-[#2D336B]' : 'text-[#7886C7]' }} hover:text-blue-900 font-semibold">
                Bantuan Operasional Sekolah
            </a>
        </li>
        <li>
            <a href="{{ route('profile.facility') }}"
                class="block {{ request()->routeIs('profile.facility') ? 'text-[#2D336B]' : 'text-[#7886C7]' }} hover:text-blue-900 font-semibold">
                Sarana dan Prasarana
            </a>
        </li>
    </ul>
</div>
