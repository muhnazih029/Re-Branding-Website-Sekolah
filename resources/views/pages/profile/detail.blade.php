<x-layouts>
    <x-layouts.header />
    <x-profiles.hero />

    <!-- Konten Utama -->
    <div class="w-full max-w-5xl p-4 mx-auto mt-10 mb-10 rounded-lg shadow-sm bg-graccent-sky-50">
        <!-- Header sederhana -->
        <div class="bg-[#2D336B] text-white text-lg font-semibold px-5 py-2.5 rounded-t-lg">
            Peserta Didik
        </div>

        <!-- Info Guru compact -->
        <div class="flex flex-col p-4 bg-white rounded-b-lg shadow-sm sm:flex-row">
            <!-- Foto Guru -->
            <div class="w-[120px] h-[160px] mx-auto overflow-hidden bg-gray-200 rounded-md sm:mx-0">
                <img src="{{ Storage::url($class->image) }}" alt="Foto Guru" class="object-cover w-full h-full">
            </div>

            <!-- Detail Guru -->
            <div class="flex-1 mt-3 sm:mt-0 sm:ml-4">
                <h2 class="text-lg font-semibold text-gray-800">{{ $class->teacher_name }}</h2>
                <div class="p-3 border border-blue-100 rounded bg-blue-50">
                    <table class="text-sm text-gray-700">
                        <tr>
                            <td class="py-1 font-medium w-28">NIP</td>
                            <td class="px-1">:</td>
                            <td>{{ $class->nip }}</td>
                        </tr>
                        <tr>
                            <td class="py-1 font-medium">Jabatan</td>
                            <td class="px-1">:</td>
                            <td>{{ $class->job }}</td>
                        </tr>
                        <tr>
                            <td class="py-1 font-medium">Tahun Mulai</td>
                            <td class="px-1">:</td>
                            <td>{{ $class->starting_year }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Tabel Siswa compact -->
        <div class="p-3 mt-4 bg-white rounded-lg shadow-sm">
            <div class="overflow-x-auto" x-data="{ showModal: false, selectedImg: '' }">
                <table class="w-full">
                    <thead>
                        <tr class="bg-[#2D336B] text-white text-sm">
                            <th class="px-4 py-2 font-medium">No</th>
                            <th class="px-4 py-2 font-medium text-left">Nama Siswa</th>
                            <th class="px-4 py-2 font-medium">NISN</th>
                            <th class="px-4 py-2 font-medium">Jenis Kelamin</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($students as $index => $student)
                            <tr class="text-sm hover:bg-gray-50">
                                <td class="px-4 py-2 text-center">{{ $index + 1 }}</td>
                                <td class="px-4 py-2"><a href="#" class="hover:underline"
                                        @click.prevent="showModal = true; selectedImg = '{{ Storage::url($student->image) }}'">
                                        {{ $student->student_name }}
                                    </a></td>
                                <td class="px-4 py-2 text-center">{{ $student->nisn }}</td>
                                <td class="px-4 py-2 text-center">
                                    <span
                                        class="px-2 py-0.5 text-xs rounded
                                    {{ $student->gender == 'Laki-laki' ? 'bg-blue-100 text-blue-800' : 'bg-pink-100 text-pink-800' }}">
                                        {{ $student->gender }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Modal -->
                <div x-show="showModal"
                    class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
                    <div class="relative w-full max-w-sm p-4 bg-white rounded shadow-lg">
                        <button class="absolute text-gray-500 top-1 right-2" @click="showModal = false">&times;</button>
                        <img :src="selectedImg" alt="Foto Siswa" class="w-full h-auto rounded">
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ url()->previous() }}"
            class="inline-block px-4 py-2 mt-6 text-white bg-[#2D336B] rounded-lg hover:bg-[#304193]">
            ← Kembali
        </a>
    </div>

    <x-layouts.footer />
</x-layouts>
