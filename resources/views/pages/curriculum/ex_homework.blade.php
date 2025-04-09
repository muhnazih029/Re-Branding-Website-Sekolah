<x-layouts>
    <x-layouts.header />
    <x-classwork.hero />

    <!-- Konten Utama -->
    <!-- Header -->
    <div style="background-color: #2D336B;" class="w-[300px] shadow-md p-4 text-center mt-10 ml-8 rounded-md">
        <h1 class="text-xl font-bold text-white">TUGAS SISWA</h1>
    </div>

    <div class="w-full max-w-4xl p-4 mx-auto mt-6 rounded-lg">
        <!-- Judul -->
        <div class="inline-block p-2 mb-4 text-sm font-bold text-white bg-blue-900 rounded-md">
            Tugas Kelas {{ $classworks->first()->class_name ?? '' }}
        </div>

        <!-- Tabel -->
        <div class="overflow-x-auto">
            <table class="w-full border border-collapse border-blue-500 bg-blue-50">
                <thead>
                    <tr class="font-bold text-left text-blue-900">
                        <th class="w-1/12 px-3 py-3 text-center border-2 border-blue-500">No</th>
                        <th class="w-7/12 px-3 py-3 border-2 border-blue-500">Tugas</th>
                        <th class="w-4/12 px-3 py-3 border-2 border-blue-500">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($classworks as $index => $work)
                        <tr>
                            <td class="h-10 px-3 py-2 text-sm text-center border-2 border-blue-500 md:text-base">
                                {{ $index + 1 }}
                            </td>
                            <td class="px-3 py-2 text-sm break-words border-2 border-blue-500 md:text-base">
                                {{ $work->title }}
                            </td>
                            <td class="px-3 py-2 text-sm break-words border-2 border-blue-500 md:text-base">
                                {!! $work->description !!}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-3 py-4 text-center text-gray-500 border-2 border-blue-500">
                                Tidak ada tugas untuk kelas ini.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-6 mb-12 ml-10 px-4 sm:px-6 md:px-8">
        <x-breadcrumb />
    </div>

    <x-layouts.footer />
</x-layouts>
