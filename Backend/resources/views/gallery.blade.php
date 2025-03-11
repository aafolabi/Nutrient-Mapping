@extends('layouts.landing')
@section('content')

    <!-- Gallery Section Start -->
    <section>
        <div class="mt-8 w-5/6 mx-auto">
            <h1 class="text-4xl font-bold text-center text-[#002411]">
                Gallery
            </h1>
        </div>
        <div
            class="w-6/6 swiper mySwiper p-12 lg:h-[650px] mx-auto md:mt-20 mt-32"
        >
            <div class="swiper-wrapper">
                <div class="swiper-slide w-96">
                    <img
                        src="nlanding/gallery/gallery1.jpeg"
                        alt=""
                        class="w-[900px] rounded-xl h-full"
                    />
                </div>
                <div class="swiper-slide">
                    <img
                        src="nlanding/gallery/gallery2.jpeg"
                        alt=""
                        class="w-[900px] rounded-xl h-full"
                    />
                </div>
                <div class="swiper-slide">
                    <img
                        src="nlanding/gallery/gallery3.jpeg"
                        alt=""
                        class="w-[900px] rounded-xl h-full"
                    />
                </div>
                <div class="swiper-slide">
                    <img
                        src="nlanding/gallery/gallery4.jpeg"
                        alt=""
                        class="w-[900px] rounded-xl h-full"
                    />
                </div>
                <div class="swiper-slide">
                    <img
                        src="nlanding/gallery/gallery5.jpeg"
                        alt=""
                        class="w-[900px] rounded-xl h-full"
                    />
                </div>
                <div class="swiper-slide">
                    <img
                        src="nlanding/gallery/gallery6.jpeg"
                        alt=""
                        class="w-[900px] rounded-xl h-full"
                    />
                </div>
                <div class="swiper-slide">
                    <img
                        src="nlanding/gallery/gallery7.jpeg"
                        alt=""
                        class="w-[900px] rounded-xl h-full"
                    />
                </div>
                <div class="swiper-slide">
                    <img
                        src="nlanding/gallery/gallery8.jpeg"
                        alt=""
                        class="w-[900px] rounded-xl h-full"
                    />
                </div>
                <div class="swiper-slide">
                    <img
                        src="nlanding/gallery/gallery9.jpeg"
                        alt=""
                        class="w-[900px] rounded-xl h-full"
                    />
                </div>
                <div class="swiper-slide">
                    <img
                        src="nlanding/gallery/gallery10.jpeg"
                        alt=""
                        class="w-[900px] rounded-xl h-full"
                    />
                </div>
                <div class="swiper-slide">
                    <img
                        src="nlanding/gallery/gallery11.jpeg"
                        alt=""
                        class="w-[900px] rounded-xl h-full"
                    />
                </div>
                <div class="swiper-slide">
                    <img
                        src="nlanding/gallery/gallery12.jpeg"
                        alt=""
                        class="w-[900px] rounded-xl h-full"
                    />
                </div>
                <div class="swiper-slide">
                    <img
                        src="nlanding/gallery/gallery13.jpeg"
                        alt=""
                        class="w-[900px] rounded-xl h-full"
                    />
                </div>
                <div class="swiper-slide">
                    <img
                        src="nlanding/gallery/gallery14.jpeg"
                        alt=""
                        class="w-[900px] rounded-xl h-full"
                    />
                </div>
                <div class="swiper-slide">
                    <img
                        src="nlanding/gallery/gallery15.jpeg"
                        alt=""
                        class="w-[900px] rounded-xl h-full"
                    />
                </div>
                <div class="swiper-slide">
                    <img
                        src="nlanding/gallery/gallery16.jpeg"
                        alt=""
                        class="w-[900px] rounded-xl h-full"
                    />
                </div>
                <div class="swiper-slide">
                    <img
                        src="nlanding/gallery/gallery17.jpeg"
                        alt=""
                        class="w-[900px] rounded-xl h-full"
                    />
                </div>
                <div class="swiper-slide">
                    <img
                        src="nlanding/gallery/gallery18.jpeg"
                        alt=""
                        class="w-[900px] rounded-xl h-full"
                    />
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
            <div class="swiper-scrollbar"></div>
        </div>
    </section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Gallery Section Ends -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 2,
            spaceBetween: 15,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                480: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 2,
                },
                1200: {
                    slidesPerView: 2,
                },
            },
        });
    </script>
@stop


