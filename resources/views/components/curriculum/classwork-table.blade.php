<!-- Tabel -->
<div class="mt-6 overflow-x-auto rounded-lg shadow-md">
    <table class="w-full text-sm text-left border border-gray-200 table-auto">
        <thead class="text-white" style="background-color: #2D336B;">
            <tr>
                <th class="w-1/12 px-4 py-3 text-center border border-gray-300">No</th>
                <th class="w-7/12 px-4 py-3 border border-gray-300">Tugas</th>
                <th class="w-4/12 px-4 py-3 border border-gray-300">Keterangan</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse ($classworks as $index => $work)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3 text-center border border-gray-200">
                        {{ $index + 1 }}
                    </td>
                    <td class="px-4 py-3 border border-gray-200">
                        <span class="font-medium text-gray-800">{{ $work->title }}</span>
                    </td>
                    <td class="px-4 py-3 border border-gray-200">
                        {!! $work->description !!}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="px-4 py-6 text-center text-gray-500 border border-gray-200">
                        Tidak ada tugas untuk kelas ini.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
