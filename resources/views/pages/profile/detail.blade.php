<x-layouts>
    <x-layouts.header />
    <x-profiles.hero />

    <!-- Konten Utama -->
    <div class="w-full p-5 bg-gray-100 rounded-lg shadow-md">
        <!-- Header -->
        <div class="bg-[#2D336B] text-white text-lg font-bold px-4 py-2 rounded-t-lg">
            Peserta Didik
        </div>

        <!-- Info Guru -->
        <div class="flex items-start p-4 bg-white rounded-lg shadow-md">
            <!-- Foto Guru -->
            <div class="w-24 h-24 bg-gray-300 rounded-md">
                <img src="{{ Storage::url($class->image) }}" alt="">
            </div>
            <!-- Detail Guru -->
            <div class="flex-1 ml-4">
                <h2 class="text-lg font-bold text-gray-800">{{ $class->teacher_name }}</h2>
                <div class="p-3 mt-2 bg-blue-100 rounded-lg">
                    <table class="text-sm text-gray-700">
                        <tr>
                            <td class="font-semibold">NIP</td>
                            <td class="px-2">:</td>
                            <td>{{ $class->nip }}</td>
                        </tr>
                        <tr>
                            <td class="font-semibold">Jabatan</td>
                            <td class="px-2">:</td>
                            <td>{{ $class->job }}</td>
                        </tr>
                        <tr>
                            <td class="font-semibold">Tahun Mulai</td>
                            <td class="px-2">:</td>
                            <td>{{ $class->starting_year }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Tabel Siswa -->
        <div class="p-4 mt-4 bg-white rounded-lg shadow-md">
            <table class="w-full border border-collapse border-blue-300">
                <thead>
                    <tr class="text-blue-900 bg-blue-100">
                        <th class="px-4 py-2 border border-blue-300">No</th>
                        <th class="px-4 py-2 border border-blue-300">Nama</th>
                        <th class="px-4 py-2 border border-blue-300">NISN</th>
                        <th class="px-4 py-2 border border-blue-300">Jenis Kelamin</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $index => $student)
                        <tr class="text-gray-800">
                            <td class="px-4 py-2 text-center border border-blue-300">{{ $index + 1 }}</td>
                            <td class="px-4 py-2 border border-blue-300">{{ $student->student_name }}</td>
                            <td class="px-4 py-2 border border-blue-300">{{ $student->nisn }}</td>
                            <td class="px-4 py-2 border border-blue-300">{{ $student->gender }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <x-layouts.footer />
</x-layouts>
