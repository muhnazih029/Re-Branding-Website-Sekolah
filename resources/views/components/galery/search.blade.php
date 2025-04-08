@props(['inputId' => 'search'])

<!-- Search Bar -->
<div class="flex justify-end pr-40 mt-20 mb-4">
    <div class="relative bg-[#2D336B] p-1 rounded-lg border border-[#2D336B]">
        <input id="{{ $inputId }}" type="text" placeholder="Search"
            class="border border-[#2D336B] rounded-lg py-2 px-4 pr-10 w-64 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        <svg class="absolute w-5 h-5 text-gray-500 right-3 top-3" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 21l-4.35-4.35M16.65 10.35a6.3 6.3 0 1 1-12.6 0 6.3 6.3 0 0 1 12.6 0z" />
        </svg>
    </div>
</div>
