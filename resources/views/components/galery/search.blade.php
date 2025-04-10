@props(['inputId' => 'search'])

<!-- Search Bar -->
<div class="flex justify-end pr-40 mt-20 mb-4">
    <div class="relative">
        <input type="text" id="{{ $inputId }}" placeholder="Search"
            class="w-full py-2 pl-10 pr-4 border border-gray-300 rounded-full shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 md:w-64" />
        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M12.9 14.32a8 8 0 111.42-1.42l4.38 4.38a1 1 0 01-1.42 1.42l-4.38-4.38zM8 14a6 6 0 100-12 6 6 0 000 12z"
                    clip-rule="evenodd" />
            </svg>
        </div>
    </div>
</div>
