<x-layouts>
    <x-layouts.header />

    <!-- Header -->
    <div style="background-color: #2D336B;" class="w-[300px] shadow-md p-4 text-center mt-10 ml-8 rounded-md">
        <h1 class="text-xl font-bold text-white">VIDEO PEMBELAJARAN</h1>
    </div>

    <!-- Main Container -->
    <div class="min-h-screen p-8">
        <!-- Search Bar -->
        <div class="flex justify-end mb-6">
            <div class="relative">
                <input type="text" placeholder="Search"
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
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Video Card -->
            <div>
                <iframe class="w-full h-64 rounded-md" src="https://www.youtube.com/embed/QCdDN1T1vdQ"
                    allowfullscreen></iframe>
                <div class="py-2 mt-2 text-center text-white bg-indigo-800 rounded-md">FPB dan KPK</div>
            </div>
            <div>
                <iframe class="w-full h-64 rounded-md" src="https://www.youtube.com/embed/QCdDN1T1vdQ"
                    allowfullscreen></iframe>
                <div class="py-2 mt-2 text-center text-white bg-indigo-800 rounded-md">FPB dan KPK</div>
            </div>

            <div>
                <iframe class="w-full h-64 rounded-md" src="https://www.youtube.com/embed/QCdDN1T1vdQ"
                    allowfullscreen></iframe>
                <div class="py-2 mt-2 text-center text-white bg-indigo-800 rounded-md">FPB dan KPK</div>
            </div>

            <div>
                <iframe class="w-full h-64 rounded-md" src="https://www.youtube.com/embed/QCdDN1T1vdQ"
                    allowfullscreen></iframe>
                <div class="py-2 mt-2 text-center text-white bg-indigo-800 rounded-md">FPB dan KPK</div>
            </div>

            <div>
                <iframe class="w-full h-64 rounded-md" src="https://www.youtube.com/embed/QCdDN1T1vdQ"
                    allowfullscreen></iframe>
                <div class="py-2 mt-2 text-center text-white bg-indigo-800 rounded-md">FPB dan KPK</div>
            </div>

            <div>
                <iframe class="w-full h-64 rounded-md" src="https://www.youtube.com/embed/QCdDN1T1vdQ"
                    allowfullscreen></iframe>
                <div class="py-2 mt-2 text-center text-white bg-indigo-800 rounded-md">FPB dan KPK</div>
            </div>
        </div>
    </div>

    <x-breadcrumb />
    <x-layouts.footer />
</x-layouts>
