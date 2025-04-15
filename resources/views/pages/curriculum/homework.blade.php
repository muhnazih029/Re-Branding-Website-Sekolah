<x-layouts>
    <x-layouts.header />
    <x-curriculum.hero />

    <!-- Konten Utama -->
    <div style="background-color: #2D336B;" class="w-[300px] shadow-md p-4 text-center mt-10 ml-16 rounded-md">
        <h1 class="text-xl font-bold text-white">TUGAS SISWA</h1>
    </div>

    <div class="container p-4 mx-auto bg-gray-100">
        <div class="grid grid-cols-1 gap-4 mt-4 sm:grid-cols-2 md:grid-cols-3">
            @foreach ($classworks as $class)
                <a href="{{ route('kurikulum.ex_homework', $class->class_name) }}"
                    class="block overflow-hidden bg-white rounded-lg shadow-lg">
                    <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                        <div class="w-full bg-gray-300 aspect-w-16 aspect-h-9"></div>
                        <div class="py-2 font-semibold text-center text-white" style="background-color: #2D336B;">Kelas {{ $class->class_name }}
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <div class="px-4 mt-6 mb-12 ml-10 sm:px-6 md:px-8">
        <x-breadcrumb />
    </div>

    <x-layouts.footer />
</x-layouts>
