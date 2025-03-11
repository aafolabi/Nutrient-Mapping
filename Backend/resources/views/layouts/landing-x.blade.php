<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>AFriNutriData | Landing, Corporate &amp; Business Templatee</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="landing/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="landing/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="landing/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="landing/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="landing/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="landing/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">



    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="landing/assets/css/theme.css" rel="stylesheet" />
    <link href="landing/assets/css/nice-select.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

</head>


<body>

<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 bg-light opacity-85" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html">
                <img class="d-inline-block align-top img-fluid" src="landing/assets/img/gallery/logo-icon.png" alt="" width="50" />

                <span class="text-theme font-monospace fs-4 ps-2">AfriNutriData</span></a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page" href="/">Home</a></li>
                    <li class="nav-item px-2"><a class="nav-link fw-medium" href="/Opportuanities">About</a></li>
                    <li class="nav-item px-2"><a class="nav-link fw-medium" href="/explore">Explore</a></li>
                    <li class="nav-item px-2"><a class="nav-link fw-medium" href="/data-centre">DataCentre</a></li>
                    <li class="nav-item px-2"><a class="nav-link fw-medium" href="#contact">Contact </a></li>
                </ul>
                <a class="btn btn-lg btn-dark bg-gradient order-0" type="submit" href="/explore">Explore</a>
            </div>
        </div>
    </nav>


    @yield('content')
    <section class="py-0" id="contact">
        <div class="bg-holder" style="background-image:url(landing/assets/img/illustrations/footer-bg.png);background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
            <div class="row justify-content-lg-between min-vh-75" style="padding-top:21rem">
                <div class="col-6 col-sm-4 col-lg-auto mb-3">
                    <h6 class="mb-3 text-1000 fw-semi-bold">MENU </h6>
                    <ul class="list-unstyled mb-md-4 mb-lg-0">
                        <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">About Us</a></li>
                        <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Contact Us</a></li>
                        <li class="mb-3"><a class="text-700 text-decoration-none" href="/explore">Explore</a></li>
                        <li class="mb-3"><a class="text-700 text-decoration-none" href="/data-centre">Data Center</a></li>
                    </ul>
                </div>
{{--                <div class="col-6 col-sm-4 col-lg-auto mb-3">--}}
{{--                    <h6 class="mb-3 text-1000 fw-semi-bold">INVEST </h6>--}}
{{--                    <ul class="list-unstyled mb-md-4 mb-lg-0">--}}
{{--                        <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Features</a></li>--}}
{{--                        <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">How it works</a></li>--}}
{{--                        <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Pricing</a></li>--}}
{{--                        <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Login</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="col-6 col-sm-4 col-lg-auto mb-3">--}}
{{--                    <h6 class="mb-3 text-1000 fw-semi-bold">LEGAL </h6>--}}
{{--                    <ul class="list-unstyled mb-md-4 mb-lg-0">--}}
{{--                        <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Privacy</a></li>--}}
{{--                        <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Terms</a></li>--}}
{{--                        <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Security</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
                <div class="col-12 col-lg-auto mb-3">
                    <div class="card bg-success">
                        <div class="card-body p-sm-4">
                            <h5 class="text-white">Contact</h5>
                            <p class="mb-0 text-white">Write to us @<span class="text-white fs--1 fs-sm-1">info@afrinutridata.com</span></p>
                            <button class="btn btn-light text-success" type="button">
                                <svg class="bi bi-person me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#76C279" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                </svg>Contact
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="text-300 mb-0" />
            <div class="row flex-center py-5">
                <div class="col-12 col-sm-8 col-md-6 text-center text-md-start"> <a class="text-decoration-none" href="#"><img class="d-inline-block align-top img-fluid" src="landing/assets/img/gallery/logo-icon.png" alt="" width="40" /><span class="text-theme font-monospace fs-3 ps-2">AfriNutriData</span></a></div>
                <div class="col-12 col-sm-8 col-md-6">
                    <p class="fs--1 text-dark my-2 text-center text-md-end">&copy; Afrinutridata (a USAID project)&nbsp;
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->




<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="landing/vendors/@popperjs/popper.min.js"></script>
<script src="landing/vendors/bootstrap/bootstrap.min.js"></script>
<script src="landing/vendors/is/is.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="landing/assets/js/theme.js"></script>
<script src="landing/assets/js/nice-select.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function(){
        $('select').niceSelect();
    });
</script>
<link href="https://fonts.googleapis.com/css2?family=Chivo:wght@300;400;700;900&amp;display=swap" rel="stylesheet">
</body>

</html>

