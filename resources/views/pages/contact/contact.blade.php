<x-layouts>
    <x-layouts.header />
    <!-- Kotak Gambar Tittle -->
    <div class="relative -mt-16 w-full h-80 md:h-[60vh] bg-cover bg-center"
        style="background-image: url('{{ asset('img/sekolah.jpg') }}');">
        <!-- Overlay-->
        <div class="absolute inset-0 bg-gradient-to-r from-gray-900/50 to-transparent"></div>
        <!-- Title-->
        <div
            class="absolute bottom-16 left-0 bg-[#E6EAF7] px-8 py-6 shadow-lg  z-10 w-[200px] flex items-center justify-center">
            <span class="text-2xl font-bold text-[#2D336B]">KONTAK</span>
        </div>
    </div>
    <div class="container mx-auto px-[50px] py-16">
        <!-- Informasi Kontak -->
        <div class="grid grid-cols-1 gap-10 text-center md:grid-cols-3">
            <!-- ALAMAT -->
            <div class="bg-[#2D336B] text-white p-10 rounded-2xl shadow-md border-2 border-[#6B9BF3]">
                <div class="flex justify-center mb-4">
                    <img src="{{ isset($settings['contact_alamat']->image) && json_decode($settings['contact_alamat']->image)
                        ? Storage::url(json_decode($settings['contact_alamat']->image)[0])
                        : asset('img/map.png') }}"
                        alt="Lokasi" class="w-10 h-10">
                </div>
                <h2 class="text-xl font-semibold">ALAMAT</h2>
                <p class="mt-3 text-sm">{{ $settings['contact_alamat']->value }}</p>
            </div>

            <!-- CALL SERVICE -->
            <div class="bg-[#2D336B] text-white p-10 rounded-2xl shadow-md border-2 border-[#6B9BF3]">
                <div class="flex justify-center mb-4">
                    <img src="{{ isset($settings['contact_email']->image) && json_decode($settings['contact_email']->image)
                        ? Storage::url(json_decode($settings['contact_email']->image)[0])
                        : asset('img/call.png') }}"
                        alt="Email" class="w-10 h-10">
                </div>
                <h2 class="text-xl font-semibold">CALL SERVICE</h2>
                <p class="mt-3 text-sm">
                    E-mail: <a href="mailto:{{ $settings['contact_email']->value }}"
                        class="underline">{{ $settings['contact_email']->value }}</a><br>
                    Telp: {{ $settings['contact_telp']->value }}
                </p>
            </div>

            <!-- JAM KERJA -->
            <div class="bg-[#2D336B] text-white p-10 rounded-2xl shadow-md border-2 border-[#6B9BF3]">
                <div class="flex justify-center mb-4">
                    <img src="{{ isset($settings['contact_jam_kerja']->image) && json_decode($settings['contact_jam_kerja']->image)
                        ? Storage::url(json_decode($settings['contact_jam_kerja']->image)[0])
                        : asset('img/jam.png') }}"
                        alt="Jam" class="w-10 h-10">
                </div>
                <h2 class="text-xl font-semibold">JAM KERJA</h2>
                <div class="mt-3 text-sm">{!! $settings['contact_jam_kerja']->value !!}</div>
            </div>
        </div>
    </div>


    <!-- Form Pengaduan -->
    <div id="pengaduan" class="flex justify-center items-center min-h-screen px-[1cm] scroll-mt-16">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-[900px]">
            <h2 class="text-[#2D336B] text-center text-2xl font-bold mb-6"
                style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">
                PENGADUAN
            </h2>

            <x-alert-success />

            <form action="{{ route('complaints.store') }}" method="POST" class="space-y-4">
                @csrf
                <div class="flex items-center">
                    <label class="text-[#2D336B] font-semibold text-lg w-[28%] text-right pr-8">Nama :</label>
                    <input type="text" name="name" value="{{ old('name', $user->name ?? '') }}"
                        class="w-[65%] px-4 py-3 bg-gray-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#2D336B]">
                </div>
                @error('name')
                    <div class="pr-8 text-sm text-right text-red-500">{{ $message }}</div>
                @enderror

                {{-- Email --}}
                <div class="flex items-center">
                    <label class="text-[#2D336B] font-semibold text-lg w-[28%] text-right pr-8">E-mail :</label>
                    <input type="email" name="email" value="{{ old('email', $user->email ?? '') }}"
                        class="w-[65%] px-4 py-3 bg-gray-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#2D336B]">
                </div>
                @error('email')
                    <div class="pr-8 text-sm text-right text-red-500">{{ $message }}</div>
                @enderror

                {{-- No Kontak --}}
                <div class="flex items-center">
                    <label class="text-[#2D336B] font-semibold text-lg w-[28%] text-right pr-8">No Kontak :</label>
                    <input type="text" name="phone" value="{{ old('phone') }}"
                        class="w-[65%] px-4 py-3 bg-gray-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#2D336B]">
                </div>
                @error('phone')
                    <div class="pr-8 text-sm text-right text-red-500">{{ $message }}</div>
                @enderror

                {{-- Deskripsi --}}
                <div class="flex items-start">
                    <label class="text-[#2D336B] font-semibold text-lg w-[28%] text-right pr-8">Deskripsi :</label>
                    <textarea name="description"
                        class="w-[65%] px-4 py-3 bg-gray-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#2D336B]"
                        rows="6">{{ old('description') }}</textarea>
                </div>
                @error('description')
                    <div class="pr-8 text-sm text-right text-red-500">{{ $message }}</div>
                @enderror

                {{-- Submit --}}
                <div class="flex justify-end pr-6">
                    <button type="submit"
                        class="bg-[#6B73D3] text-white font-bold py-2 px-8 rounded-full hover:bg-[#525AA1] transition">
                        Kirim
                    </button>
                </div>
            </form>
        </div>
    </div>

    <x-layouts.footer />
</x-layouts>
