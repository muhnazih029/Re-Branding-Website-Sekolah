<x-layouts>
    <x-layouts.header />
    <x-curriculum.hero />

    <!-- Header -->
    <div style="background-color: #2D336B;" class="w-[300px] shadow-md p-4 text-center mt-10 ml-16 rounded-md">
        <h1 class="text-xl font-bold text-white">VIDEO PEMBELAJARAN</h1>
    </div>

    <!-- Main Container -->
    <div class="p-8">
        <!-- Search Bar -->
        <div class="flex justify-end px-8 mb-6">
            <div class="relative">
                <input type="text" id="search-learning-video" placeholder="Search"
                    class="w-full py-2 pl-10 pr-4 border border-gray-300 rounded-full shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 md:w-64" />
                <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12.9 14.32a8 8 0 111.42-1.42l4.38 4.38a1 1 0 01-1.42 1.42l-4.38-4.38zM8 14a6 6 0 100-12 6 6 0 000 12z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>
        <!-- Video Grid -->
        <div id="learning-video-container"
            class="grid grid-cols-1 gap-6 px-20 sm:grid-cols-1 sm:px-3 md:grid-cols-2 lg:px-20 lg:grid-cols-3">
            @php
                function getYoutubeId($url)
                {
                    preg_match(
                        '/(?:youtu\.be\/|youtube\.com\/(?:watch\?v=|embed\/|v\/))([^\?&"\'>]+)/',
                        $url,
                        $matches,
                    );
                    return $matches[1] ?? null;
                }
            @endphp

            <!-- Video Card -->
            @foreach ($learningVideos as $video)
                @php
                    $youtubeId = getYoutubeId($video->youtube_url);
                @endphp
                <div>
                    @if ($youtubeId)
                        <iframe class="w-full h-64 rounded-md" src="https://www.youtube.com/embed/{{ $youtubeId }}"
                            allowfullscreen>
                        </iframe>
                    @else
                        <div class="flex items-center justify-center w-full h-64 text-gray-600 bg-gray-300">
                            Invalid YouTube URL
                        </div>
                    @endif
                    <div class="py-2 mt-2 text-center text-white rounded-md" style="background-color: #2D336B;">
                        {{ $video->title }}
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Pagination -->
        <x-pagination :paginator="$learningVideos" />
    </div>

    <div class="mb-12 ml-3 md:px-5 lg:px-12 lg:ml-14">
        <x-breadcrumb />
    </div>

    @push('scripts')
        @vite('resources/js/page/load-larning-videos.js')
    @endpush
    <x-layouts.footer />
</x-layouts>
