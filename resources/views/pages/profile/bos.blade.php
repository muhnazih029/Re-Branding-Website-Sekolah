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
                    <h1 class="text-xl font-bold text-white">Dana BOS</h1>
                </div>
            </div>

            <!-- Garis Pembatas -->
            <div class="w-[200px] border-b-4 border-blue-900 mb-5"></div>

            <!-- Konten dan Sidebar -->
            <div class="flex flex-col md:flex-row md:space-x-4">
                <x-profiles.aside />

                <!-- Main Content -->
                <div class="flex-1 w-full p-6 bg-white rounded-lg shadow-lg">
                    <!-- <h2 class="text-xl font-bold text-blue-900">BOS Bantuan Operasional Sekolah</h2> -->

                    <!-- Dropdown Tahun -->
                    <div class="flex items-center mt-4 space-x-2">
                        <span class="font-semibold text-gray-700">Tahun:</span>
                        <form method="GET" action="{{ route('profile.dana_bos') }}">
                            <select name="year"
                                class="p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                onchange="this.form.submit()">
                                @foreach ($years as $yearOption)
                                    <option value="{{ $yearOption }}" {{ $year == $yearOption ? 'selected' : '' }}>
                                        {{ $yearOption }}
                                    </option>
                                @endforeach
                            </select>
                        </form>
                    </div>

                    <!-- Tabel BOS -->
                    <div class="mt-4 overflow-x-auto">
                        <table class="w-full text-sm border border-collapse border-gray-300">
                            <thead>
                                <tr class="text-white" style="background-color: #2D336B;">
                                    <th class="p-2 border border-gray-300">Tanggal</th>
                                    <th class="p-2 border border-gray-300">Penerimaan (Rp)</th>
                                    <th class="p-2 border border-gray-300">Pengeluaran (Rp)</th>
                                    <th class="p-2 border border-gray-300">Saldo Bank (Rp)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($assistances as $data)
                                    <tr class="text-center @if ($loop->even) bg-gray-50 @endif">
                                        <td class="p-2 border border-gray-300">
                                            {{ \Carbon\Carbon::parse($year . '-' . str_pad($data->month, 2, '0', STR_PAD_LEFT) . '-01')->format('F Y') }}
                                        </td>
                                        <td class="p-2 border border-gray-300">
                                            {{ number_format($data->total_receipt, 0, ',', '.') }}
                                        </td>
                                        <td class="p-2 border border-gray-300">
                                            {{ number_format($data->total_expenditure, 0, ',', '.') }}
                                        </td>
                                        <td class="p-2 border border-gray-300">
                                            {{ number_format($data->total_balance, 0, ',', '.') }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="text-center">
                                        <td colspan="4" class="p-2 border border-gray-300">Data Dana BOS tidak ada
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
