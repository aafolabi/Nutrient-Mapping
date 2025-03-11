@extends('layouts.landing')
@section('content')

    <!-- Hero Section Start -->
    <section>
        <div class="w-full abouthero lg:h-screen lg:relative">
            <div class="md:w-5/6 w-11/12 mx-auto py-28">
                <div
                    class="lg:absolute bottom-12 rounded-3xl bg-opacity-80 lg:w-[500px] p-5 bg-white"
                >
                    <p
                        class="text-base font-normal text-[#171818] lg:leading-10 leading-8"
                    >
                        This project aims to profile and document the nutritional
                        properties of five staple crops in two major countries in West
                        Africa - Nigeria and Ghana. The broader impact of this project is
                        to help every community represented in Africa make informed
                        nutrition/dietary decisions by leveraging a nutrient database. Our
                        objectives align with the third goal of the agenda 2063 promoted
                        by the African Union (AU) to achieve a prosperous Africa and
                        transform it into a self-sustaining global player.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section Ends -->
    <!-- Objectives Section Start -->
    <section>
        <div class="w-5/6 mx-auto mt-24 flex flex-col lg:flex-row gap-20">
            <div class="lg:w-[500px]">
                <h2 class="font-medium md:text-2xl text-xl text-[#002411]">
                    The project objectives and expected outcomes are to:
                </h2>
            </div>
            <div class="w-full">
                <ul
                    class="font-normal space-y-4 text-xl text-[#002411] list-disc list-outside"
                >
                    <li>
                        Characterize the nutritional qualities of staple crops in Nigeria
                        and Ghana.
                    </li>
                    <li>
                        Report on how these findings relates agronomic systems and
                        nutrition in Nigeria and Ghana.
                    </li>
                    <li>
                        Use collected data to create an open-access online platform for
                        public reference.
                    </li>
                    <li>
                        Collaborate with the AU Semi-arid Food Grain Research and
                        Development (AU-SAFGRAD) specialized technical office, the AU
                        Department of Health, Humanitarian Affairs and Social Development
                        (HHS), and the AU Mission in DC on the development and maintenance
                        of Database.
                    </li>
                    <li>
                        Conduct a media campaign to advertise the new platform, including
                        publishing research findings on AU website.
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Objectives Section Ends -->
    <!-- Team Section Starts -->
    <section>
        <div class="w-5/6 mx-auto mt-24">
            <h4 class="text-2xl font-bold text-[#002411] capitalize">The Team</h4>
            <div class="grid lg:grid-cols-4 md:grid-cols-2 lg:gap-4 gap-8 mt-8">
                <div class="">
                    <img src="/team/Monisola.png" alt="" class="w-full" />
                    <div class="mt-4">
                        <div class="flex gap-2">
                            <h5 class="text-xl font-bold text-[#696969] capitalize">
                                Monisola Alashi
                            </h5>
                            <a href="https://www.linkedin.com/in/adeola-monisola-alashi-phd-68404725" target="_blank">
                                <img src="/nlanding/images/linkedin.png" alt="" class="h-8" />
                            </a>
                        </div>
                        <p class="text-xl font-normal text-[#696969] capitalize pt-2">
                            Food Scientist
                        </p>
                    </div>
                </div>
                <div class="">
                    <img src="/team/Adesuwa.png" alt="" class="w-full" />
                    <div class="mt-4">
                        <div class="flex gap-2">
                            <h5 class="text-xl font-bold text-[#696969] capitalize">
                                Adesuwa Erhunmwunse
                            </h5>
                            <a href="https://www.linkedin.com/in/adesuwa-erhunmwunse-1b433a169" target="_blank">
                                <img src="/nlanding/images/linkedin.png" alt="" class="h-8" />
                            </a>
                        </div>
                        <p class="text-xl font-normal text-[#696969] capitalize pt-2">
                            Soil Biogeochemist/Microbial Ecologist
                        </p>
                    </div>
                </div>
                <div class="">
                    <img src="/team/Abimfoluwa.png" alt="" class="w-full" />
                    <div class="mt-4">
                        <div class="flex gap-2">
                        <h5 class="text-xl font-bold text-[#696969] capitalize">
                            Abimfoluwa Olaleye
                        </h5>
                            <a href="https://www.linkedin.com/in/abimfoluwa-gideon-olaleye-phd-pag-19612a84" target="_blank">
                                <img src="/nlanding/images/linkedin.png" alt="" class="h-8" />
                            </a>
                        </div>
                        <p class="text-xl font-normal text-[#696969] capitalize pt-2">
                            Agronomist/Environmental Specialist
                        </p>
                    </div>
                </div>
                <div class="">
                    <img src="/team/Atoloye.png" alt="" class="w-full" />
                    <div class="mt-4">
                        <div class="flex gap-2">
                            <h5 class="text-xl font-bold text-[#696969] capitalize">
                                Idowu Atoloye
                            </h5>
                            <a href="https://www.linkedin.com/in/iaatoloye/" target="_blank">
                                <img src="/nlanding/images/linkedin.png" alt="" class="h-8" />
                            </a>
                        </div>
                        <p class="text-xl font-normal text-[#696969] capitalize pt-2">
                            Climate-smart Agriculture Expert
                        </p>
                    </div>
                </div>
                <div class="">
                    <img src="/team/Anuoluwapo.png" alt="" class="w-full" />
                    <div class="mt-4">
                        <div class="flex gap-2">
    `                       <h5 class="text-xl font-bold text-[#696969] capitalize">
                                Anuoluwapo Ogunleye
                            </h5>`
                            <a href="https://www.linkedin.com/in/anuoluwapo-ogunleye-7ba967196/" target="_blank">
                                <img src="/nlanding/images/linkedin.png" alt="" class="h-8" />
                            </a>
                        </div>
                        <p class="text-xl font-normal text-[#696969] capitalize pt-2">
                            Soil Health Expert
                        </p>
                    </div>
                </div>
                <div class="">
                    <img src="/team/Akwasi.png" alt="" class="w-full" />
                    <div class="mt-4">
                        <div class="flex gap-2">
                        <h5 class="text-xl font-bold text-[#696969] capitalize">
                            Akwasi Opoku
                        </h5>
                        <a href="https://www.linkedin.com/in/akwasi-opoku-34013319b" target="_blank">
                            <img src="/nlanding/images/linkedin.png" alt="" class="h-8" />
                        </a>
                    </div>
                        <p class="text-xl font-normal text-[#696969] capitalize pt-2">
                            Soil Health Expert
                        </p>
                    </div>
                </div>
                <div class="">
                    <img src="/team/Afo.png" alt="" class="w-full" />
                    <div class="mt-4">
                        <div class="flex gap-2">
                        <h5 class="text-xl font-bold text-[#696969] capitalize">
                            Afolabi Agbona
                        </h5>
                            <a href="https://scholar.google.com/citations?user=LBPv7OkAAAAJ&hl=en" target="_blank">
                                <img src="/nlanding/images/linkedin.png" alt="" class="h-8" />
                            </a>
                        </div>
                        <p class="text-xl font-normal text-[#696969] capitalize pt-2">
                            Data Scientist/Predictive Plant Breeder
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Team Section Ends -->
@stop
