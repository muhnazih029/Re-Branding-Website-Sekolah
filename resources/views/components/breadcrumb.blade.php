@php
    $announcementTypes = [
        'prestasi-sekolah' => 'Prestasi Sekolah',
        'berita-sekolah' => 'Berita Sekolah',
        'lomba' => 'Lomba',
    ];
    $alias = request()->route('alias') ?? 'prestasi-sekolah';
    $routes = [
        // Pengumuman
        'announcement.new_student' => [
            ['label' => 'Beranda', 'url' => route('home')],
            ['label' => 'PPDB', 'url' => route('announcement.new_student')],
        ],
        'announcement.index' => [
            ['label' => 'Beranda', 'url' => route('home')],
            [
                'label' => $announcementTypes[$alias] ?? 'Pengumuman',
                'url' => route('announcement.index', ['alias' => $alias]),
            ],
        ],
        'announcement.show' => [
            ['label' => 'Beranda', 'url' => route('home')],
            [
                'label' => $announcementTypes[$alias] ?? 'Pengumuman',
                'url' => route('announcement.index', ['alias' => $alias]),
            ],
            ['label' => 'Detail', 'url' => '#'],
        ],

        // Profil
        'profile.vision_mission' => [
            ['label' => 'Beranda', 'url' => route('home')],
            ['label' => 'Profil', 'url' => route('profile.index')],
            ['label' => 'Visi-Misi', 'url' => route('profile.vision_mission')],
        ],
        'profile.history' => [
            ['label' => 'Beranda', 'url' => route('home')],
            ['label' => 'Profil', 'url' => route('profile.index')],
            ['label' => 'Sejarah Sekolah', 'url' => route('profile.history')],
        ],
        'profile.teachers' => [
            ['label' => 'Beranda', 'url' => route('home')],
            ['label' => 'Profil', 'url' => route('profile.index')],
            ['label' => 'Pendidik', 'url' => route('profile.teachers')],
        ],
        'profile.students' => [
            ['label' => 'Beranda', 'url' => route('home')],
            ['label' => 'Profil', 'url' => route('profile.index')],
            ['label' => 'Peserta Didik', 'url' => route('profile.students')],
        ],
        'profile.extracurricular' => [
            ['label' => 'Beranda', 'url' => route('home')],
            ['label' => 'Profil', 'url' => route('profile.index')],
            ['label' => 'Ekstrakulikuler', 'url' => route('profile.extracurricular')],
        ],
        'profile.dana_bos' => [
            ['label' => 'Beranda', 'url' => route('home')],
            ['label' => 'Profil', 'url' => route('profile.index')],
            ['label' => 'Dana BOS', 'url' => route('profile.dana_bos')],
        ],
        'profile.facility' => [
            ['label' => 'Beranda', 'url' => route('home')],
            ['label' => 'Profil', 'url' => route('profile.index')],
            ['label' => 'Sarana dan Prasarana', 'url' => route('profile.facility')],
        ],

        // Kurikulum
        'kurikulum.school_curriculum' => [
            ['label' => 'Beranda', 'url' => route('home')],
            ['label' => 'Kurikulum', 'url' => route('kurikulum.index')],
            ['label' => 'Kurikulum Sekolah', 'url' => route('kurikulum.school_curriculum')],
        ],
        'kurikulum.calendar' => [
            ['label' => 'Beranda', 'url' => route('home')],
            ['label' => 'Kurikulum', 'url' => route('kurikulum.index')],
            ['label' => 'Kalender Pendidikan', 'url' => route('kurikulum.calendar')],
        ],
        'kurikulum.homework' => [
            ['label' => 'Beranda', 'url' => route('home')],
            ['label' => 'Kurikulum', 'url' => route('kurikulum.index')],
            ['label' => 'Tugas Kelas', 'url' => route('kurikulum.homework')],
        ],
        'kurikulum.ex_homework' => [
            ['label' => 'Beranda', 'url' => route('home')],
            ['label' => 'Kurikulum', 'url' => route('kurikulum.index')],
            ['label' => 'Tugas Kelas', 'url' => route('kurikulum.homework')],
        ],
        'kurikulum.learning_videos' => [
            ['label' => 'Beranda', 'url' => route('home')],
            ['label' => 'Kurikulum', 'url' => route('kurikulum.index')],
            ['label' => 'Video Pembelajaran', 'url' => route('kurikulum.learning_videos')],
        ],

        // Galeri
        'galery.photo' => [
            ['label' => 'Beranda', 'url' => route('home')],
            ['label' => 'Foto', 'url' => route('galery.photo')],
        ],
        'galery.video' => [
            ['label' => 'Beranda', 'url' => route('home')],
            ['label' => 'Video', 'url' => route('galery.video')],
        ],

        'contact' => [['label' => 'Beranda', 'url' => route('home')], ['label' => 'Kontak', 'url' => route('contact')]],
    ];

    $currentRoute = request()->route()->getName();
    $breadcrumbs = $routes[$currentRoute] ?? [['label' => 'Beranda', 'url' => route('home')]];
@endphp

<!-- Breadcrumb Navigation -->
<div class="flex items-center space-x-2 mt-[50px]">
    @foreach ($breadcrumbs as $breadcrumb)
        @if (!$loop->last)
            <a href="{{ $breadcrumb['url'] }}"
                class="bg-[#E6EAF7] text-[#2D336B] font-bold px-4 py-2 rounded-full shadow-md text-sm sm:text-base sm:px-4 sm:py-2">
                {{ $breadcrumb['label'] }}
            </a>
            <span class="text-[#2D336B]">›</span>
        @else
            <span
                class="bg-[#E6EAF7] text-[#2D336B] font-bold px-4 py-2 rounded-full shadow-md text-sm sm:text-base sm:px-4 sm:py-2">
                {{ $breadcrumb['label'] }}
            </span>
        @endif
    @endforeach
</div>
