@props(['settings', 'kepsek'])
<!-- Sambutan Kepsek -->
<div class="container mx-auto mt-24 mb-10 text-center">
    <h1 class="text-4xl font-semibold text-blue-900">
        {{ $settings['sambutan_text']->label }}
    </h1>
</div>
<!-- Sambutan dan Foto Kepala Sekolah -->
<div class="container p-5 mx-auto bg-gray-100 rounded-lg md:p-8">
    <div class="flex flex-col items-center md:flex-row">
        <!-- Container Foto Kepsek-->
        <div class="relative w-full text-center md:w-1/3 ">
            <!-- Blopmaker SVG -->
            <div class="absolute inset-0 z-0 flex items-center justify-center">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
                    class="w-64 text-blue-900 opacity-100 h-46 md:w-64 md:h-46">
                    <path fill="#2D336B"
                        d="M69.3,-22.5C78.6,5.9,67,41.1,43.2,58.1C19.4,75,-16.6,73.7,-40,56.4C-63.4,39.1,-74.1,5.7,-65.4,-22.1C-56.6,-49.8,-28.3,-72.1,0.9,-72.4C30,-72.7,60.1,-51,69.3,-22.5Z"
                        transform="translate(100 100)" />
                </svg>
            </div>

            <!-- Foto Kepsek -->
            <img src="{{ Storage::url($kepsek->image) }}" alt="Kepala Sekolah"
                class="relative z-10 mx-auto rounded-lg w-50 h-74 md:w-50 md:h-70">

            <!-- Kotak Nama -->
            <div style="background-color: #2D336B"
                class="absolute bottom-[-40px] md:bottom-[-55px] left-1/2 transform -translate-x-1/2 text-white py-2 px-4 rounded-full w-48 md:w-64 text-center shadow-lg z-20">
                <p class="text-xs font-semibold md:text-sm">Kepala Sekolah SDN Bandarharjo 01</p>
                @if ($kepsek)
                    <p class="text-xs md:text-sm">{{ $kepsek->teacher_name }}</p>
                @else
                    <p>Data Kepala Sekolah tidak ditemukan.</p>
                @endif
            </div>
        </div>

        <!-- Sambutan -->
        <div class="w-full mx-auto mt-16 md:w-2/3 md:mt-0 ">
            <!-- Kotak Sambutan Kepsek -->
            <div style="background-color: #E6EAF7;"
                class="w-full p-3 mx-auto font-semibold text-center text-gray-700 rounded-full md:w-3/4">
                SAMBUTAN KEPALA SEKOLAH
            </div>

            <!-- Kotak Sambutan -->
            <div style="background-color: #E6EAF7;"
                class="w-full p-4 mx-auto mt-4 text-gray-700 border-2 md:p-5 rounded-2xl md:w-3/4">
                <p class="text-sm md:text-base">
                    {!! str($settings['sambutan_text']->value ?? '<p>Data belum tersedia.</p>')->sanitizeHtml() !!}
                </p>
            </div>
        </div>
    </div>
</div>
