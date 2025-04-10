<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'SDN Bandarharjo 01') }}</title>
    <link rel="icon" href="/img/logo.png">

    <!-- Vite (CSS & JS App) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- SwiperJS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>

    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body class="bg-gray-100 font-poppins pt-[190px]">
    <button id="scrollToTopBtn" title="Kembali ke atas"
        class="fixed z-50 hidden p-4 text-white bg-[#304193] hover:bg-white hover:text-[#304193] transition-all duration-300 ease-in-out rounded-full shadow-lg cursor-pointer bottom-5 right-5 opacity-0 translate-y-8"
        style="box-shadow: 0 10px 15px -3px #304193, 0 4px 6px -2px rgba(0,0,0,0.05);">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                d="M3.293 11.707a1 1 0 011.414 0L10 6.414l5.293 5.293a1 1 0 011.414-1.414l-6-6a1 1 0 00-1.414 0l-6 6a1 1 0 010 1.414z"
                clip-rule="evenodd" />
        </svg>
    </button>

    {{ $slot }}

    @stack('scripts')
</body>

</html>
