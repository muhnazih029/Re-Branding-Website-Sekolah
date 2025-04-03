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
                    <h1 class="text-xl font-bold text-white">Ekstrakulikuler</h1>
                </div>
            </div>

            <!-- Garis Pembatas -->
            <div class="w-[200px] border-b-4 border-blue-900 mb-5"></div>

            <!-- Konten dan Sidebar -->
            <div class="flex flex-col md:flex-row">
                <x-profiles.aside />

                <!-- Konten -->
                <div class="w-full p-5 bg-gray-100 rounded-lg md:w-3/4 md:ml-5">
                    <div class="grid h-full grid-cols-1 gap-4 mt-4 sm:grid-cols-2">
                        @foreach ($extracurriculars as $key => $extra)
                            <div class="mb-6">
                                <h2 class="bg-[#7886C7] text-white px-4 py-2 shadow-md inline-block font-bold">
                                    {{ $key + 1 }}. {{ $extra->extra_name }}
                                </h2>
                                <div class="mt-2 bg-gray-300 h-64 w-full md:w-[55vh] rounded-md">
                                    <img src="{{ Storage::url($extra->image) }}" alt="{{ $extra->extra_name }}"
                                        class="object-cover w-full h-full rounded-md">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <x-breadcrumb />
        </div>
    </div>
    <x-layouts.footer />
</x-layouts>
