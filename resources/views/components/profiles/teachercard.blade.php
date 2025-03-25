@props(['teacher'])
<div class="mt-4">
    <!-- Profil -->
    <div class="bg-white p-5 rounded-lg shadow-md flex flex-col md:flex-row items-start max-w-[400px] md:max-w-[800px]">
        <!-- Kotak Foto -->
        <div class="w-32 mb-4 overflow-hidden bg-gray-300 h-35 md:w-32 md:h-35 md:mb-0 md:mr-5">
            <img src="{{ Storage::url($teacher->image ?? 'default.jpg') }}" alt="Foto {{ $teacher->teacher_name }}"
                class="object-cover w-full h-full transition-opacity cursor-pointer hover:opacity-50"
                onclick="openPopup('{{ Storage::url($teacher->image ?? 'default.jpg') }}')">
        </div>
        <!-- Informasi Teks -->
        <div class="flex-1">
            <h2 class="text-xl font-bold text-blue-900">{{ $teacher->teacher_name }}</h2>
            <div class="mt-3">
                <table class="w-full">
                    <tr>
                        <th class="py-2 font-semibold text-left whitespace-nowrap">NIP :
                            {{ $teacher->nip ?? '-' }}</th>
                    </tr>
                    <tr>
                        <th class="py-2 font-semibold text-left whitespace-nowrap">Tahun
                            Mulai :
                            {{ $teacher->starting_year ?? '-' }}</th>
                    </tr>
                    <tr>
                        <th class="py-2 font-semibold text-left whitespace-nowrap">Jabatan :
                            {{ $teacher->job ?? '-' }}</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
