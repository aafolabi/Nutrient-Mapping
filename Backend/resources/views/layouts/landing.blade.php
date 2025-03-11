<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/nlanding/Styles/Style.css" />
    <script
        defer
        src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>
    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link
        href="https://fonts.googleapis.com/css?family=Plus+Jakarta+Sans:200,300,regular,500,600,700,800,200italic,300italic,italic,500italic,600italic,700italic,800italic"
        rel="stylesheet"
    />
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <title>AfriNutriData</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {},
                },
            },
        };
    </script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

</head>
<body x-cloak x-data="{nav: false}" class="bg-gray-50">
<!-- Navbar Section Start -->
<section>
    <div x-data="{nav: false}" class="w-full h-24">
        <div
            class="w-5/6 mx-auto flex lg:justify-start justify-between lg:gap-64 items-center h-24"
        >
            <div class="flex gap-1 items-center h-full">
                <img src="./nlanding/images/logo.png" alt="" width="200px" height="50px"/>
{{--                <p class="text-base font-medium text-[#0bac56]">AfriNutriData</p>--}}
            </div>
            <button x-on:click="nav = true" class="lg:hidden block">
                <img src="/nlanding/images/menu.png" alt="" class="h-10" />
            </button>
            <nav class="hidden lg:block">
                <ul
                    class="flex gap-5 text-base font-normal cursor-pointer text-[#002411]"
                >
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About us</a></li>
                    <li><a href="/explore">Explore</a></li>
                    <li><a href="/data-centre">DataCenter</a></li>
                    <li><a href="database.csv" onclick="return confirm('Are you sure you want to download this data?')">DataBase</a></li>
                    <li><a href="https://documenter.getpostman.com/view/26800460/2s93XvW4fN" target="_blank">Developers</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                </ul>
            </nav>
        </div>
        <div
            x-show="nav"
            x-transition:enter.duration.500ms
            x-transition:leave.duration.500ms
            :class='nav ? "absolute px-3 py-5 top-0 w-full bg-white lg:hidden block bg-opacity-50 backdrop-blur-xl transition ease-in-out delay-150" : "hidden"'
        >
            <div class="flex justify-between">
                <img src="/nlanding/images/logo.png" alt="" class="h-10" />
                <button x-on:click="nav = false" class="">
                    <img src="/nlanding/images/close.png" alt="" class="" />
                </button>
            </div>
            <ul class="text-base font-normal text-[#002411] space-y-3 mt-4">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About us</a></li>
                <li><a href="/explore">Explore</a></li>
                <li><a href="/data-centre">DataCenter</a></li>
                <li><a href="database.csv" onclick="return confirm('Are you sure you want to download this data?')">DataBase</a></li>
                <li><a href="https://documenter.getpostman.com/view/26800460/2s93XvW4fN" target="_blank">Developers</a></li>
                <li><a href="/gallery">Gallery</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- Navbar Section Ends -->

    @yield('content')


<!-- Footer Section Start -->
<footer class="bg-white w-full mt-24">
    <div class="w-5/6 mx-auto py-6 flex flex-col lg:flex-row gap-10 border-b">
        <div class="lg:w-96">
            <div class="lg:max-w-md">
            <img src="./nlanding/images/logo-black.png" alt="" width="200px" height="50px"/>
            <p class="text-sm text-[#9a9ea6] font-normal pt-4">
            Nutrition is a critical part of health and development.
            Better nutrition is related to improved infant,
            child and maternal health, stronger immune systems, safer pregnancy and childbirth.
            </p>
            </div>
            <div class="mt-8 space-y-4">
                <div class="flex gap-2">
                    <img src="nlanding/images/mail.png" alt="" />
                    <div class="mt-1">
                        <p class="text-[12px] text-[#9a9ea6] font-normal">Mail</p>
                        <p class="text-base font-normal text-[#0bac56]">
                            afrinutridata@gmail.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:w-72">
            <h6 class="text-[#002411] text-lg font-normal">Menu</h6>
            <p class="text-sm font-normal text-[#9a9ea6] pt-4">
                <!-- Be the first one to know about discounts, offers and events -->
            </p>
            <ul class="text-[#0bac56] mt-4 text-base font-normal space-y-3">
                <li><a href="/about">About us</a></li>
                <li><a href="/explore">Explore</a></li>
                <li><a href="/data-centre">Data Center</a></li>
                <li><a href="database.csv" onclick="return confirm('Are you sure you want to download this data?')">Database</a></li>
                <li><a href="https://documenter.getpostman.com/view/26800460/2s93XvW4fN" target="_blank">Developers</a></li>
                <li><a href="/gallery">Gallery</a></li>
            </ul>
        </div>
        <div class="lg:max-w-sm">
            <h6 class="text-[#002411] text-lg font-normal">Contact us</h6>
            <p class="text-sm font-normal text-[#9a9ea6] pt-4">
                We usually respond before 24 hours.
            </p>
            <form class="mt-4 space-y-4" action="">
                <input
                    type="text"
                    class="h-12 w-full bg-[#fdfdfd] border border-[#dde1df] pl-5 rounded-lg text-[#9a9ea6] text-[12px]"
                    placeholder="Name"
                />
                <input
                    type="text"
                    class="h-12 w-full bg-[#fdfdfd] border border-[#dde1df] pl-5 rounded-lg text-[#9a9ea6] text-[12px]"
                    placeholder="Email"
                />
                <textarea
                    name="message"
                    placeholder="Message"
                    id=""
                    class="h-32 w-full bg-[#fdfdfd] border border-[#dde1df] pl-5 rounded-lg text-[#9a9ea6] text-[12px] pt-5"
                ></textarea>
                <button
                    class="w-full h-14 bg-[#0bac56] text-white font-bold text-sm rounded-lg"
                >
                    Submit
                </button>
            </form>
        </div>
    </div>
    <div class="flex justify-between w-5/6 mx-auto h-16 items-center">
        <div class="">
            <div class="flex gap-2">
            © <img src="./nlanding/images/logo-black.png" alt="" width="132px" height="25px"/>
            </div>
        </div>
        <div class="">
            <div class="flex gap-2">
                <p class="font-normal text-sm text-[#9a9ea6]">
                     <a href="https://www.usau.usmission.gov/" target="_blank"><h5>a U.S.A.U project</h5></a>
                </p>
                <a href="https://www.usau.usmission.gov/" target="_blank">
                    <img src="/nlanding/images/usau.webp" alt="" class="h-10" width="25px"/>
                </a>
            </div>

        </div>
    </div>
</footer>
<!-- Footer Section Ends -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>
