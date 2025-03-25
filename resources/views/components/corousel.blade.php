@props(['settings'])
<!-- Kotak Slide -->
<div class="container relative z-10 mx-auto mt-16">
    <div class="w-full mx-auto swiper mySwiper md:w-3/4 lg:w-3/4">
        <div class="swiper-wrapper">
            @foreach (json_decode($settings['corousel']->image ?? '[]') as $image)
                <div class="swiper-slide h-[300px] md:h-[500px] rounded-xl overflow-hidden bg-white">
                    <img src="{{ asset('storage/' . $image) }}" alt="Corousel Image"
                        class="object-center w-full h-auto min-h-[500px] max-h-[500px] object-cover">
                </div>
            @endforeach
        </div>
        <!-- Swiper Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var swiper = new Swiper(".mySwiper", {
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            loop: true,
        });
    });
</script>
