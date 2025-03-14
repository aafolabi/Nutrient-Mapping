@extends('layouts.landing')
@section('content')
    <section class="py-0" id="header">
        <div class="bg-holder d-none d-md-block" style="background-image:url(landing/assets/img/illustrations/hero-header.png);background-position:right top;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="bg-holder d-md-none" style="background-image:url(landing/assets/img/illustrations/hero-bg.png);background-position:right top;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
            <div class="row align-items-center min-vh-75 min-vh-lg-100">
                <div class="col-md-7 col-lg-6 col-xxl-5 py-6 text-sm-start text-center">
                    <h1 class="mt-6 mb-sm-4 fw-semi-bold lh-sm fs-4 fs-lg-5 fs-xl-6">Accurate Nutrition Data<br class="d-block d-lg-block" />for Africa</h1>
                    <p class="mb-4 fs-1">Accurate & empirical nutrition data for Africa. Available for researchers, scientist and Government agencies.
                    </p><a class="btn btn-lg btn-success" href="/explore" role="button">Explore Now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" id="Opportuanities">
        <div class="bg-holder d-none d-sm-block" style="background-image:url(landing/assets/img/illustrations/bg.png);background-position:top left;background-size:225px 755px;margin-top:-17.5rem;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto text-center mb-3">
                    <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">New Opportunities</h5>
                    <p class="mb-5">We are the first and the only crowdfunding platform enabling you to help finance our farmers.</p>
                </div>
            </div>
            <div class="row flex-center h-100">
                <div class="col-xl-9">
                    <div class="row">
                        <div class="col-md-4 mb-5">
                            <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                                <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="landing/assets/img/icons/farmer.svg" height="60" alt="" />
                                    <div class="card-body">
                                        <h6 class="fw-bold fs-1 heading-color">Connect with our farmers</h6>
                                        <p class="mt-3 mb-md-0 mb-lg-2">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                                <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="landing/assets/img/icons/growth.svg" height="60" alt="" />
                                    <div class="card-body">
                                        <h6 class="fw-bold fs-1 heading-color">Grow your business</h6>
                                        <p class="mt-3 mb-md-0 mb-lg-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                                <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="landing/assets/img/icons/planting.svg" height="60" alt="" />
                                    <div class="card-body">
                                        <h6 class="fw-bold fs-1 heading-color">Social Impact Invesment</h6>
                                        <p class="mt-3 mb-md-0 mb-lg-2">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-5" id="invest">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 mb-3">
                    <div class="row">
                        <div class="col-lg-9 mb-3">
                            <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Invest on your convenience</h5>
                            <p class="mb-5">Autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla</p>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="card text-white"><img class="card-img" src="landing/assets/img/gallery/short-terms.png" alt="..." />
                                <div class="card-img-overlay d-flex flex-column justify-content-center px-5 px-md-3 px-lg-5 bg-dark-gradient">
                                    <h6 class="text-success pt-2">NEW FARM TODAY</h6>
                                    <hr class="text-white" style="height:0.12rem;width:2.813rem" />
                                    <div class="pt-lg-3">
                                        <h6 class="fw-bold text-white fs-1 fs-md-2 fs-lg-3 w-xxl-50">Short terms investment</h6>
                                        <p class="w-xxl-75">Invest in farms that will be ready for harvest in 3-18 months</p>
                                        <button class="btn btn-lg btn-light text-success" type="button">Browse Farm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="card text-white"><img class="card-img" src="landing/assets/img/gallery/fully-funded.png" alt="..." />
                                <div class="card-img-overlay d-flex flex-column justify-content-center px-5 px-md-3 px-lg-5 bg-light-gradient">
                                    <h6 class="text-success pt-2">FULLY FUNDED</h6>
                                    <hr class="text-white" style="height:0.12rem;width:2.813rem" />
                                    <div class="pt-lg-3">
                                        <h6 class="fw-bold text-white fs-1 fs-md-2 fs-lg-3 w-xxl-50">Long terms investment</h6>
                                        <p class="w-xxl-75">Consider farms that have long term investment program.</p>
                                        <button class="btn btn-lg btn-light text-success" type="button">Learn More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <section class="py-0">
        <div class="bg-holder" style="background-image:url(landing/assets/img/illustrations/how-it-works.png);background-position:center bottom;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-sm-8 col-md-9 col-xl-5 text-center pt-8">
                    <h5 class="fw-bold fs-3 fs-xxl-5 lh-sm mb-3 text-white">How it works</h5>
                    <p class="mb-5 text-white">Take your pick from the supply chain and participate in agribusiness projects that are backed up not only by AfriNutriData, but also by the best land, family heritage, innovation and overall superior expertise.</p>
                </div>
                <div class="col-sm-9 col-md-12 col-xxl-9">
                    <div class="theme-tab">
                        <ul class="nav justify-content-between">
                            <li class="nav-item" role="presentation"><a class="nav-link active fw-semi-bold" href="#bootstrap-tab1" data-bs-toggle="tab" data-bs-target="#tab1" id="tab-1"><span class="nav-item-circle-parent"><span class="nav-item-circle">01</span></span></a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link fw-semi-bold" href="#bootstrap-tab2" data-bs-toggle="tab" data-bs-target="#tab2" id="tab-2"><span class="nav-item-circle-parent"><span class="nav-item-circle">02</span></span></a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link fw-semi-bold" href="#bootstrap-tab3" data-bs-toggle="tab" data-bs-target="#tab3" id="tab-3"><span class="nav-item-circle-parent"><span class="nav-item-circle">03</span></span></a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link fw-semi-bold" href="#bootstrap-tab4" data-bs-toggle="tab" data-bs-target="#tab4" id="tab-4"><span class="nav-item-circle-parent"><span class="nav-item-circle">04</span></span></a></li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-1">
                                <div class="row align-items-center my-6 mx-auto">
                                    <div class="col-md-6 col-lg-5 offset-md-1">
                                        <h3 class="fw-bold lh-base text-white">Select your farmshare and complete reservation form here.</h3>
                                    </div>
                                    <div class="col-md-5 text-white offset-lg-1">
                                        <p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab-2">
                                <div class="row align-items-center my-6 mx-auto">
                                    <div class="col-md-6 col-lg-5 offset-md-1">
                                        <h3 class="fw-bold lh-base text-white">The Farm Share has been one of the best new additions to our life</h3>
                                    </div>
                                    <div class="col-md-5 text-white offset-lg-1">
                                        <p class="mb-0">We the farmers choose the vegetables in your share each week. A Farm Share is perfect for those who love the weekly surprise, and who look forward to cooking with inspiration from the seasons.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab-3">
                                <div class="row align-items-center my-6 mx-auto">
                                    <div class="col-md-6 col-lg-5 offset-md-1">
                                        <h3 class="fw-bold lh-base text-white">There is so much love and thought put into this CSA. You can feel that.</h3>
                                    </div>
                                    <div class="col-md-5 text-white offset-lg-1">
                                        <p class="mb-0">We the farmers choose the vegetables in your share each week. A Farm Share is perfect for those who love the weekly surprise, and who look forward to cooking with inspiration from the seasons.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab-4">
                                <div class="row align-items-center my-6 mx-auto">
                                    <div class="col-md-6 col-lg-5 offset-md-1">
                                        <h3 class="fw-bold lh-base text-white">The Farm Share has been one of the best new additions to our life</h3>
                                    </div>
                                    <div class="col-md-5 text-white offset-lg-1">
                                        <p class="mb-0">We the farmers choose the vegetables in your share each week. A Farm Share is perfect for those who love the weekly surprise, and who look forward to cooking with inspiration from the seasons.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-8" id="testimonial">
        <div class="container-lg">
            <div class="row flex-center">
                <div class="col-12 col-lg-10 col-xl-12">
                    <div class="bg-holder" style="background-image:url(landing/assets/img/illustrations/testimonial-bg.png);background-position:top left;background-size:120px 83px;">
                    </div>
                    <!--/.bg-holder-->

                    <h6 class="fs-3 fs-lg-4 fw-bold lh-sm">What investors like you <br />are saying about AfriNutriData</h6>
                </div>
                <div class="carousel slide pt-3" id="carouselExampleDark" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <div class="row h-100 mx-3 mx-sm-5 mx-md-4 my-md-7 m-lg-7 mt-7">
                                <div class="col-md-4 mb-5 mb-md-0">
                                    <div class="card h-100 shadow">
                                        <div class="card-body my-3">
                                            <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="landing/assets/img/gallery/user-1.png" width="50" alt="" />
                                                <div class="flex-1 align-items-center pt-2">
                                                    <h5 class="mb-0 fw-bold text-success">Fernando Soler</h5>
                                                    <p class="fw-normal text-black">Telecommunication Engineer</p>
                                                </div>
                                            </div>
                                            <p class="mb-0 px-3 px-md-2 px-xxl-3">&quot;Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-5 mb-md-0">
                                    <div class="card h-100 shadow">
                                        <div class="card-body my-3">
                                            <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="landing/assets/img/gallery/user-2.png" width="50" alt="" />
                                                <div class="flex-1 align-items-center pt-2">
                                                    <h5 class="mb-0 fw-bold text-success">Ilone Pickford</h5>
                                                    <p class="fw-normal text-black">Head of Agrogofund </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 px-3 px-md-2 px-xxl-3">&quot;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-5 mb-md-0">
                                    <div class="card h-100 shadow">
                                        <div class="card-body my-3">
                                            <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="landing/assets/img/gallery/user-3.png" width="50" alt="" />
                                                <div class="flex-1 align-items-center pt-2">
                                                    <h5 class="mb-0 fw-bold text-success">Ed O’Brien</h5>
                                                    <p class="fw-normal text-black">Herbalist</p>
                                                </div>
                                            </div>
                                            <p class="mb-0 px-3 px-md-2 px-xxl-3">&quot;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <div class="row h-100 mx-3 mx-sm-5 mx-md-4 my-md-7 m-lg-7 mt-7">
                                <div class="col-md-4 mb-5 mb-md-0">
                                    <div class="card h-100 shadow">
                                        <div class="card-body my-3">
                                            <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="landing/assets/img/gallery/user-1.png" width="50" alt="" />
                                                <div class="flex-1 align-items-center pt-2">
                                                    <h5 class="mb-0 fw-bold text-success">Fernando Soler</h5>
                                                    <p class="fw-normal text-black">Telecommunication Engineer</p>
                                                </div>
                                            </div>
                                            <p class="mb-0 px-3 px-md-2 px-xxl-3">&quot;Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-5 mb-md-0">
                                    <div class="card h-100 shadow">
                                        <div class="card-body my-3">
                                            <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="landing/assets/img/gallery/user-2.png" width="50" alt="" />
                                                <div class="flex-1 align-items-center pt-2">
                                                    <h5 class="mb-0 fw-bold text-success">Ilone Pickford</h5>
                                                    <p class="fw-normal text-black">Head of Agrogofund Groups </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 px-3 px-md-2 px-xxl-3">&quot;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-5 mb-md-0">
                                    <div class="card h-100 shadow">
                                        <div class="card-body my-3">
                                            <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="landing/assets/img/gallery/user-3.png" width="50" alt="" />
                                                <div class="flex-1 align-items-center pt-2">
                                                    <h5 class="mb-0 fw-bold text-success">Ed O’Brien</h5>
                                                    <p class="fw-normal text-black">Herbalist</p>
                                                </div>
                                            </div>
                                            <p class="mb-0 px-3 px-md-2 px-xxl-3">&quot;Ui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row h-100 mx-3 mx-sm-5 mx-md-4 my-md-7 m-lg-7 mt-7">
                                <div class="col-md-4 mb-5 mb-md-0">
                                    <div class="card h-100 shadow">
                                        <div class="card-body my-3">
                                            <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="landing/assets/img/gallery/user-1.png" width="50" alt="" />
                                                <div class="flex-1 align-items-center pt-2">
                                                    <h5 class="mb-0 fw-bold text-success">Fernando Soler</h5>
                                                    <p class="fw-normal text-black">Telecommunication Engineer</p>
                                                </div>
                                            </div>
                                            <p class="mb-0 px-3 px-md-2 px-xxl-3">&quot;Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-5 mb-md-0">
                                    <div class="card h-100 shadow">
                                        <div class="card-body my-3">
                                            <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="landing/assets/img/gallery/user-2.png" width="50" alt="" />
                                                <div class="flex-1 align-items-center pt-2">
                                                    <h5 class="mb-0 fw-bold text-success">Ilone Pickford</h5>
                                                    <p class="fw-normal text-black">Head of Agrogofund Groups </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 px-3 px-md-2 px-xxl-3">&quot;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-5 mb-md-0">
                                    <div class="card h-100 shadow">
                                        <div class="card-body my-3">
                                            <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="landing/assets/img/gallery/user-3.png" width="50" alt="" />
                                                <div class="flex-1 align-items-center pt-2">
                                                    <h5 class="mb-0 fw-bold text-success">Ed O’Brien</h5>
                                                    <p class="fw-normal text-black">Herbalist</p>
                                                </div>
                                            </div>
                                            <p class="mb-0 px-3 px-md-2 px-xxl-3">&quot;Ui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row px-3 px-sm-6 px-md-0 px-lg-5 px-xl-4">
                        <div class="col-12 position-relative"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="z-index-1 cta">

        <div class="container">
            <div class="row flex-center">
                <div class="col-12">
                    <div class="card shadow h-100 py-5">
                        <div class="card-body text-center">
                            <h1 class="fw-semi-bold mb-4">The future of &nbsp;<span class="text-success">Farm Investing</span> &nbsp; is AfriNutriData</h1><a class="btn btn-lg btn-success px-6" href="#" role="button">Invest Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->
@stop


