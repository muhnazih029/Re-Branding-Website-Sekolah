@props(['paginator'])

@if ($paginator->hasPages())
    <div id="pagination" class="flex justify-center mt-6 space-x-2">
        {{-- Previous Button --}}
        @if ($paginator->onFirstPage())
            <button class="bg-[#6B72A7] text-white px-4 py-2 rounded-lg">&laquo;</button>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="bg-[#6B72A7] text-white px-4 py-2 rounded-lg">
                &laquo;
            </a>
        @endif

        {{-- Page Numbers --}}
        @php
            $start = max(1, $paginator->currentPage() - 1);
            $end = min($paginator->lastPage(), $paginator->currentPage() + 1);
        @endphp

        @if ($start > 1)
            <a href="{{ $paginator->url(1) }}" class="bg-[#A7B0DA] text-white font-bold px-4 py-2 rounded-lg">1</a>
            @if ($start > 2)
                <span class="bg-[#A7B0DA] text-white font-bold px-3 py-1.5 rounded-lg">...</span>
            @endif
        @endif

        @for ($page = $start; $page <= $end; $page++)
            <a href="{{ $paginator->url($page) }}"
                class="font-bold px-4 py-2 rounded-lg {{ $page == $paginator->currentPage() ? 'bg-[#6B72A7] text-white' : 'bg-[#A7B0DA] text-white' }}">
                {{ $page }}
            </a>
        @endfor

        @if ($end < $paginator->lastPage())
            @if ($end + 1 < $paginator->lastPage())
                <span class="bg-[#A7B0DA] text-white font-bold px-3 py-1.5 rounded-lg">...</span>
            @endif
            <a href="{{ $paginator->url($paginator->lastPage()) }}"
                class="bg-[#A7B0DA] text-white font-bold px-4 py-2 rounded-lg">
                {{ $paginator->lastPage() }}
            </a>
        @endif

        {{-- Next Button --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="bg-[#6B72A7] text-white px-4 py-2 rounded-lg">
                &raquo;
            </a>
        @else
            <button class="bg-[#6B72A7] text-white px-4 py-2 rounded-lg">&raquo;</button>
        @endif
    </div>
@endif
