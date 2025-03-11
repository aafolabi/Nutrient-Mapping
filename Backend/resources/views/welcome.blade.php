@extends('layouts.landing')
@section('content')

<!-- Hero Section Start -->
<section>
    <div class="w-5/6 mx-auto lg:flex justify-between">
        <div class="lg:py-20 mt-10 lg:mt-0 lg:max-w-md">
            <h1 class="lg:text-4xl text-3xl font-bold text-[#002411]">
                Accurate Nutrition Data
                for Africa, by Africans
            </h1>
            <p class="font-normal lg:text-xl text-sm text-[#002411] pt-4">
                Information on African Crop Nutrients, to drive
                balanced nutrition and promote good health.
                Available to researchers, scientist and Government agencies.
            </p>
            <a href="/explore">
                <button class="bg-[#0bac56] h-14 mt-8 w-40 rounded-xl text-white font-normal text-xl capitalize">
                    Explore now
                </button>
            </a>
        </div>
        <div class="lg:flex hidden gap-1 mt-4">
            <div
                class="w-64 h-96 border-[15px] bg-[#f0f0f0] border-[#0bac56] mt-10"
            >
                <img
                    src="nlanding/images/hero1.png"
                    alt=""
                    class="rounded-br-3xl mt-4 ml-4"
                />
            </div>
            <div class="w-64 h-96 border-[15px] bg-[#f0f0f0] border-[#0bac56]">
                <div class="">
                    <img
                        src="nlanding/images/hero2.png"
                        alt=""
                        class="rounded-tl-3xl -mt-8 -ml-4"
                    />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section Ends -->
<!-- Opportunities Section Start -->
<section>
    <div class="w-5/6 mx-auto mt-24">
        <div class="">
            <h2
                class="lg:text-4xl text-3xl font-medium text-[#002411] capitalize text-center"
            >
                Objectives
            </h2>
            <p
                class="text-base font-normal text-[#002411] text-center lg:w-96 mx-auto pt-5"
            >
                The project objectives and expected outcomes are:
            </p>
        </div>
        <div class="grid lg:grid-cols-3 gap-4 mt-8 w-full">
            <div class="h-80 bg-white py-5 px-2">
                <img src="nlanding/images/farmers.png" alt="" class="mx-auto" />
                <div class="mt-4">
                    <h4 class="text-2xl font-medium text-[#002411] text-center">
                        Research
                    </h4>
                    <p class="pt-3 lg:text-xl text-base text-[#002411] text-center">
                        Characterize the nutritional qualities of staple crops in Nigeria and Ghana.
                    </p>
                </div>
            </div>
            <div class="h-80 bg-white py-5 px-2">
                <img src="nlanding/images/planting.png" alt="" class="mx-auto" />
                <div class="mt-4">
                    <h4 class="text-2xl font-medium text-[#002411] text-center">
                        Analysis
                    </h4>
                    <p class="pt-3 lg:text-xl text-base text-[#002411] text-center">
                        Report on how these findings relates agronomic systems and nutrition in Nigeria and Ghana.
                        Use collected data to create an open-access online platform for public reference.
                    </p>
                </div>
            </div>

            <a href="https://www.au-safgrad.org/" target="_blank">
                <div class="h-80 bg-white py-5 px-2">
                    <img src="nlanding/images/growth.png" alt="" class="mx-auto" />
                    <div class="mt-4">
                        <h4 class="text-2xl font-medium text-[#002411] text-center">
                            Collaboration with AU-SAFGRAD
                        </h4>
                        <p class="pt-3 lg:text-xl text-base text-[#002411] text-center">
                            Collaborate with (AU-SAFGRAD) specialized technical office, the AU Department of Health, Humanitarian Affairs and Social Development (HHS),
                            and the AU Mission in DC.
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- Opportunities Section Ends -->

<!-- Gallery Section Start -->
<section>
    <div class="w-5/6 swiper mySwiper p-12 h-96 mx-auto md:mt-20 mt-32">
        <div class="swiper-wrapper">
            <div class="swiper-slide w-96">
                <img
                    src="nlanding/images/maize1.jpeg"
                    alt=""
                    class="w-80 rounded-xl h-full"
                />
            </div>
            <div class="swiper-slide">
                <img
                    src="nlanding/images/maize2.jpeg"
                    alt=""
                    class="w-96 rounded-xl h-full"
                />
            </div>
            <div class="swiper-slide">
                <img
                    src="nlanding/images/maize3.jpeg"
                    alt=""
                    class="w-96 rounded-xl h-full"
                />
            </div>
            <div class="swiper-slide">
                <img
                    src="nlanding/images/maize4.jpeg"
                    alt=""
                    class="w-96 rounded-xl h-full"
                />
            </div>
            <div class="swiper-slide">
                <img
                    src="nlanding/images/cass1.jpeg"
                    alt=""
                    class="w-96 rounded-xl h-full"
                />
            </div>
            <div class="swiper-slide">
                <img
                    src="nlanding/images/cass2.jpeg"
                    alt=""
                    class="w-96 rounded-xl h-full"
                />
            </div>
            <div class="swiper-slide">
                <img
                    src="nlanding/images/cass3.jpg"
                    alt=""
                    class="w-96 rounded-xl h-full"
                />
            </div>
            <div class="swiper-slide">
                <img
                    src="nlanding/images/cass4.jpeg"
                    alt=""
                    class="w-96 rounded-xl h-full"
                />
            </div>
            <div class="swiper-slide">
                <img
                    src="nlanding/images/Okro1.jpeg"
                    alt=""
                    class="w-96 rounded-xl h-full"
                />
            </div>
            <div class="swiper-slide">
                <img
                    src="nlanding/images/Okro2.jpeg"
                    alt=""
                    class="w-96 rounded-xl h-full"
                />
            </div>
            <div class="swiper-slide">
                <img
                    src="nlanding/images/okro3.jpeg"
                    alt=""
                    class="w-96 rounded-xl h-full"
                />
            </div>
            <div class="swiper-slide">
                <img
                    src="nlanding/images/okro4.jpeg"
                    alt=""
                    class="w-96 rounded-xl h-full"
                />
            </div>
            <div class="swiper-slide">
                <img
                    src="nlanding/images/rice1.jpeg"
                    alt=""
                    class="w-96 rounded-xl h-full"
                />
            </div>
            <div class="swiper-slide">
                <img
                    src="nlanding/images/rice2.jpeg"
                    alt=""
                    class="w-96 rounded-xl h-full"
                />
            </div>
            <div class="swiper-slide">
                <img
                    src="nlanding/images/rice3.jpeg"
                    alt=""
                    class="w-96 rounded-xl h-full"
                />
            </div>
            <div class="swiper-slide">
                <img
                    src="nlanding/images/rice4.jpeg"
                    alt=""
                    class="w-96 rounded-xl h-full"
                />
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- Gallery Section Ends -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
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
                slidesPerView: 4,
            },
        },
    });
</script>

@stop
