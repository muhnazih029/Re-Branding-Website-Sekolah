<x-layouts>
    <x-layouts.header />
    <x-profiles.hero />

    <!-- Konten Utama -->
    <div class="flex items-center justify-center min-h-screen mt-4 bg-gray-100">
        <div class="container p-5 pl-10 mx-auto md:pl-20">
            <!-- Kotak PROFIL dan Visi Misi Sekolah -->
            <div class="flex flex-col mb-5 space-y-5 md:flex-row md:items-start md:space-x-5 md:space-y-0">
                <div style="background-color: #2D336B;" class="w-[200px] shadow-md p-5 text-center">
                    <h1 class="text-xl font-bold text-white">PROFIL</h1>
                </div>
                <div style="background-color: #2D336B;" class="w-[300px] shadow-md p-5 text-center md:ml-5 md:mt-0 mt-0">
                    <h1 class="text-xl font-bold text-white">Sarana & Prasarana</h1>
                </div>
            </div>

            <!-- Garis Pembatas -->
            <div class="w-[200px] border-b-4 border-blue-900 mb-5"></div>

            <!-- Konten dan Sidebar -->
            <div class="flex flex-col md:flex-row md:space-x-4">
                <x-profiles.aside />
                <div class="flex-1 w-full p-6 bg-white rounded-lg shadow-lg">

                    <!-- Tabel BOS -->
                    <div class="mt-4 overflow-x-auto">
                        <table class="w-full text-sm border border-collapse border-gray-300">
                            <thead>
                                <tr class="text-white" style="background-color: #2D336B;">
                                    <th class="p-2 border border-gray-300">No</th>
                                    <th class="p-2 border border-gray-300">Nama Barang</th>
                                    <th class="p-2 border border-gray-300">Jumlah Barang</th>
                                    <th class="p-2 border border-gray-300">Gambar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($facilities as $index => $facility)
                                    <tr class="text-center @if ($loop->even) bg-gray-50 @endif">
                                        <td class="p-2 border border-gray-300">{{ $index + 1 }}</td>
                                        <td class="p-2 border border-gray-300">{{ $facility->name }}</td>
                                        <td class="p-2 border border-gray-300">{{ $facility->quantity }}</td>
                                        <td class="p-2 border border-gray-300">
                                            <img src="{{ asset('storage/' . $facility->image) }}" alt="Facility Image"
                                                class="object-cover w-20 h-20">
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="p-2 text-center border border-gray-300">
                                            Data fasilitas tidak ada
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <x-breadcrumb />
        </div>
    </div>
    <x-layouts.footer />
</x-layouts>
