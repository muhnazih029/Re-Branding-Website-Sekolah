@props(['announcement'])

<div class="flex flex-col overflow-hidden bg-white rounded-lg shadow-md">
    <!-- Thumbnail Berita -->
    <div class="w-full h-48 overflow-hidden bg-gray-300 rounded-t-lg">
        <img src="{{ Storage::url($announcement->image ?? 'default.jpg') }}" alt="{{ $announcement->title }}"
            class="object-cover w-full h-full">
    </div>

    <!-- Konten Berita -->
    <div class="flex flex-col flex-grow p-4">
        <!-- Judul Berita -->
        <h2 class="text-xl font-semibold text-blue-900">{{ $announcement->title }}</h2>

        <!-- Deskripsi Singkat -->
        <p class="flex-grow mt-2 text-sm text-gray-600 line-clamp-3">
            {{ Str::limit(strip_tags($announcement->content), 150, '...') }}
        </p>

        <!-- Tombol Baca Selengkapnya -->
        <a href="{{ route('announcement.show', ['alias' => $announcement->alias, 'slug' => $announcement->slug]) }}"
            class="inline-block px-4 py-2 mt-4 text-sm font-semibold text-white transition duration-300 bg-blue-900 rounded-lg hover:bg-blue-800 w-fit">
            Baca Selengkapnya
        </a>
    </div>
</div>
