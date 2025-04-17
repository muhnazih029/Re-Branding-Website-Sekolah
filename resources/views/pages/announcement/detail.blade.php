<x-layouts>
    <x-layouts.header />

    <div class="max-w-3xl p-6 mx-auto mt-10 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-blue-900">{{ $announcement->title }}</h1>

        <p class="mt-2 text-sm text-gray-500">
            Ditulis oleh: {{ $announcement->author }} |
            {{ \Carbon\Carbon::parse($announcement->created_at)->format('d M Y') }}
        </p>

        <img src="{{ Storage::url($announcement->image) }}" alt="{{ $announcement->title }}"
            class="w-full h-auto mt-4 rounded-lg" height="100px">

        <div class="mt-6 text-gray-700">
            {!! nl2br(e($announcement->content)) !!}
        </div>

        <a href="{{ url()->previous() }}"
            class="inline-block px-4 py-2 mt-6 text-white bg-blue-900 rounded-lg hover:bg-blue-800">
            ← Kembali
        </a>
    </div>
    <div class="flex items-center mb-10 ml-4 space-x-2 md:ml-32">
        <x-breadcrumb />
    </div>
    <x-layouts.footer />
</x-layouts>
