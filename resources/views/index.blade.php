<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-wide" data-theme="theme-default" data-assets-path="{{ asset('assets') }}" data-template="front-pages">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>GMZStore - Jasa Pembuatan Website Topup</title>


    <meta name="description" content="Jasa pembuatan website topup termurah di indonesia mulai buka toko anda gratis!" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo-gmz.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />


    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/front-page.css') }}" />
    <!-- Vendors CSS -->

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/nouislider/nouislider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/front-page-landing.css') }}" />

    <style>
        .price-note {
            position: absolute;
            margin: auto;
            left: 0;
            right: 0;
        }
    </style>

    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
</head>

<body>
    <!-- Navbar: Start -->
    <nav class="layout-navbar shadow-none py-0">
        <div class="container">
            <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-4 ">
                <!-- Menu logo wrapper: Start -->
                <div class="navbar-brand app-brand demo d-flex py-0 me-4">
                    <!-- Mobile menu toggle: Start-->
                    <button class="navbar-toggler border-0 px-0 me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="tf-icons bx bx-menu bx-sm align-middle"></i>
                    </button>
                    <!-- Mobile menu toggle: End-->
                    <a href="{{ URL::to('/') }}" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img width="30" src="{{ asset('assets/img/logo-gmz.png') }}">
                        </span>
                        <span class="app-brand-text menu-text fw-bold ms-2 ps-1">GMZStore</span>
                    </a>
                </div>
                <!-- Menu logo wrapper: End -->
                <!-- Menu wrapper: Start -->
                <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
                    <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="tf-icons bx bx-x bx-sm"></i>
                    </button>
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link fw-medium" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="#fitur">Fitur</a>
                        </li>
                        @if(false)
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="#ulasan">Ulasan</a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="#harga">Harga</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="#faq">FAQ</a>
                        </li>
                    </ul>
                </div>
                <div class="landing-menu-overlay d-lg-none"></div>
                <!-- Menu wrapper: End -->
                <!-- Toolbar: Start -->
                <ul class="navbar-nav flex-row align-items-center ms-auto">

                    <!-- Style Switcher -->
                    <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <i class='bx bx-sm'></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                            <li>
                                <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                    <span class="align-middle"><i class='bx bx-sun me-2'></i>Light</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                    <span class="align-middle"><i class="bx bx-moon me-2"></i>Dark</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                    <span class="align-middle"><i class="bx bx-desktop me-2"></i>System</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- / Style Switcher-->
                    <!-- navbar button: Start -->
                    <li>
                        <a href="#harga" class="btn btn-primary"><span class="tf-icons bx bx-paper-plane me-md-1"></span><span class="d-none d-md-block">Buat Sekarang</span></a>
                    </li>
                    <!-- navbar button: End -->
                </ul>
                <!-- Toolbar: End -->
            </div>
        </div>
    </nav>
    <!-- Navbar: End -->


    <!-- Sections:Start -->


    <div data-bs-spy="scroll" class="scrollspy-example">
        <!-- Hero: Start -->
        <section id="hero-animation">
            <div id="home" class="section-py landing-hero position-relative">
                <div class="container">
                    <div class="hero-text-box text-center">
                        <h1 class="text-primary hero-title display-4 fw-bold">GMZStore</h1>
                        <h2 class="hero-sub-title h5 mb-4 pb-1">
                            Jasa pembuatan website topup termurah di indonesia mulai dari Rp. 0 segera buka toko anda gratis!
                        </h2>
                    </div>
                    <div id="home" class="hero-animation-img">
                        <a href="../vertical-menu-template/app-ecommerce-dashboard.html" target="_blank">
                            <div id="" class="position-relative hero-dashboard-img">
                                <img src="{{ asset('assets/img/gatot.png') }}" alt="hero dashboard" class="animation-img" data-app-light-img="front-pages/landing-page/hero-dashboard-light.png" data-app-dark-img="front-pages/landing-page/hero-dashboard-dark.png" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="landing-hero-blank"></div>
        </section>
        <!-- Hero: End -->

        <!-- Useful features: Start -->
        <section id="fitur" class="section-py landing-features">
            <div class="container">
                <div class="text-center mb-3 pb-1">
                    <span class="badge bg-label-primary">Fitur Kami</span>
                </div>
                <h3 class="text-center mb-1">
                    <span class="section-title">Manfaat yang akan kamu dapatkan</span> dari GMZStore
                </h3>
                <p class="text-center mb-3 mb-md-5 pb-3">
                    GMZStore menawarkan jasa pembuatan website topup milikmu sendiri secara gratis. Mulai menghasilkan uang dengan membuat website topup milikmu sendiri
                </p>
                <div class="features-icon-wrapper row gx-0 gy-4 g-sm-5">
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-3">
                            <img src="{{ asset('assets/img/front-pages/icons/laptop.png') }}" alt="laptop charging" />
                        </div>
                        <h5 class="mb-3">Responsif</h5>
                        <p class="features-icon-description">
                            Design website topup yang responsif dan dapat diakses di segala device.
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-3">
                            <img src="{{ asset('assets/img/front-pages/icons/rocket.png') }}" alt="transition up" />
                        </div>
                        <h5 class="mb-3">Peluang Bisnis</h5>
                        <p class="features-icon-description">
                            Hasilkan uang dari toko topup milik kamu sendiri
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-3">
                            <img src="{{ asset('assets/img/front-pages/icons/paper.png') }}" alt="edit" />
                        </div>
                        <h5 class="mb-3">Transaksi Otomatis</h5>
                        <p class="features-icon-description">
                            Transaksi dilakukan secara otomatis di proses oleh sistem
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-3">
                            <img src="{{ asset('assets/img/front-pages/icons/check.png') }}" alt="3d select solid" />
                        </div>
                        <h5 class="mb-3">Integerasi API</h5>
                        <p class="features-icon-description">
                            Panduan integerasi API dari beberapa provider game yang mudah.
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-3">
                            <img src="{{ asset('assets/img/front-pages/icons/user.png') }}" alt="lifebelt" />
                        </div>
                        <h5 class="mb-3">Membership</h5>
                        <p class="features-icon-description">Tawarkan fitur membership pada pelanggan loyalmu.</p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-3">
                            <img src="{{ asset('assets/img/front-pages/icons/keyboard.png') }}" alt="google docs" />
                        </div>
                        <h5 class="mb-3">Banyak Game</h5>
                        <p class="features-icon-description">Tersedia lebih dari 30+ game untuk diintegerasikan.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Useful features: End -->

        @if(false)
        <!-- Real customers reviews: Start -->
        <section id="ulasan" class="section-py bg-body landing-reviews pb-0">
            <!-- What people say slider: Start -->
            <div class="container">
                <div class="row align-items-center gx-0 gy-4 g-lg-5">
                    <div class="col-md-6 col-lg-5 col-xl-3">
                        <div class="mb-3 pb-1">
                            <span class="badge bg-label-primary">Review</span>
                        </div>
                        <h3 class="mb-1"><span class="section-title">Cerita pemilik toko</span></h3>
                        <p class="mb-3 mb-md-5">
                            Lihat review pemilik toko<br class="d-none d-xl-block" />
                            sukses mendirikan toko mereka sendiri.
                        </p>
                        <div class="landing-reviews-btns d-flex align-items-center gap-3">
                            <button id="reviews-previous-btn" class="btn btn-label-primary reviews-btn" type="button">
                                <i class="bx bx-chevron-left bx-sm"></i>
                            </button>
                            <button id="reviews-next-btn" class="btn btn-label-primary reviews-btn" type="button">
                                <i class="bx bx-chevron-right bx-sm"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-7 col-xl-9">
                        <div class="swiper-reviews-carousel overflow-hidden mb-5 pb-md-2 pb-md-3">
                            <div class="swiper" id="swiper-reviews">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                                <div class="mb-3">
                                                    <img src="../../assets/img/front-pages/branding/logo-1.png" alt="client logo" class="client-logo img-fluid" />
                                                </div>
                                                <p>
                                                    “Vuexy is hands down the most useful front end Bootstrap theme I've ever used. I can't wait
                                                    to use it again for my next project.”
                                                </p>
                                                <div class="text-warning mb-3">
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar me-2 avatar-sm">
                                                        <img src="../../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Cecilia Payne</h6>
                                                        <p class="small text-muted mb-0">CEO of Airbnb</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                                <div class="mb-3">
                                                    <img src="../../assets/img/front-pages/branding/logo-2.png" alt="client logo" class="client-logo img-fluid" />
                                                </div>
                                                <p>
                                                    “I've never used a theme as versatile and flexible as Vuexy. It's my go to for building
                                                    dashboard sites on almost any project.”
                                                </p>
                                                <div class="text-warning mb-3">
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar me-2 avatar-sm">
                                                        <img src="../../assets/img/avatars/2.png" alt="Avatar" class="rounded-circle" />
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Eugenia Moore</h6>
                                                        <p class="small text-muted mb-0">Founder of Hubspot</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                                <div class="mb-3">
                                                    <img src="../../assets/img/front-pages/branding/logo-3.png" alt="client logo" class="client-logo img-fluid" />
                                                </div>
                                                <p>
                                                    This template is really clean & well documented. The docs are really easy to understand and
                                                    it's always easy to find a screenshot from their website.
                                                </p>
                                                <div class="text-warning mb-3">
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar me-2 avatar-sm">
                                                        <img src="../../assets/img/avatars/3.png" alt="Avatar" class="rounded-circle" />
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Curtis Fletcher</h6>
                                                        <p class="small text-muted mb-0">Design Lead at Dribbble</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                                <div class="mb-3">
                                                    <img src="../../assets/img/front-pages/branding/logo-4.png" alt="client logo" class="client-logo img-fluid" />
                                                </div>
                                                <p>
                                                    All the requirements for developers have been taken into consideration, so I’m able to build
                                                    any interface I want.
                                                </p>
                                                <div class="text-warning mb-3">
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bx-star bx-sm"></i>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar me-2 avatar-sm">
                                                        <img src="../../assets/img/avatars/4.png" alt="Avatar" class="rounded-circle" />
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Sara Smith</h6>
                                                        <p class="small text-muted mb-0">Founder of Continental</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                                <div class="mb-3">
                                                    <img src="../../assets/img/front-pages/branding/logo-5.png" alt="client logo" class="client-logo img-fluid" />
                                                </div>
                                                <p>
                                                    “I've never used a theme as versatile and flexible as Vuexy. It's my go to for building
                                                    dashboard sites on almost any project.”
                                                </p>
                                                <div class="text-warning mb-3">
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar me-2 avatar-sm">
                                                        <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Eugenia Moore</h6>
                                                        <p class="small text-muted mb-0">Founder of Hubspot</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                                <div class="mb-3">
                                                    <img src="../../assets/img/front-pages/branding/logo-6.png" alt="client logo" class="client-logo img-fluid" />
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam nemo mollitia, ad eum
                                                    officia numquam nostrum repellendus consequuntur!
                                                </p>
                                                <div class="text-warning mb-3">
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bxs-star bx-sm"></i>
                                                    <i class="bx bx-star bx-sm"></i>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar me-2 avatar-sm">
                                                        <img src="../../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Sara Smith</h6>
                                                        <p class="small text-muted mb-0">Founder of Continental</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- What people say slider: End -->
            <hr class="m-0" />
            <!-- Logo slider: Start -->
            <div class="container">
                <div class="swiper-logo-carousel py-4 my-lg-2">
                    <div class="swiper" id="swiper-clients-logos">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="../../assets/img/front-pages/branding/logo_1-light.png" alt="client logo" class="client-logo" data-app-light-img="front-pages/branding/logo_1-light.png" data-app-dark-img="front-pages/branding/logo_1-dark.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="../../assets/img/front-pages/branding/logo_2-light.png" alt="client logo" class="client-logo" data-app-light-img="front-pages/branding/logo_2-light.png" data-app-dark-img="front-pages/branding/logo_2-dark.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="../../assets/img/front-pages/branding/logo_3-light.png" alt="client logo" class="client-logo" data-app-light-img="front-pages/branding/logo_3-light.png" data-app-dark-img="front-pages/branding/logo_3-dark.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="../../assets/img/front-pages/branding/logo_4-light.png" alt="client logo" class="client-logo" data-app-light-img="front-pages/branding/logo_4-light.png" data-app-dark-img="front-pages/branding/logo_4-dark.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="../../assets/img/front-pages/branding/logo_5-light.png" alt="client logo" class="client-logo" data-app-light-img="front-pages/branding/logo_5-light.png" data-app-dark-img="front-pages/branding/logo_5-dark.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Logo slider: End -->
        </section>
        @endif

        @if(false)
        <!-- Our great team: Start -->
        <section id="landingTeam" class="section-py landing-team">
            <div class="container">
                <div class="row gy-5 mt-2 align-items-center">
                    <div class="col-lg-5">
                        <h5 class="text-secondary">Apa sih GMZStore?</h5>
                        <h2>Jasa pembuatan toko topup gratis pertama di Indonesia.</h2>
                    </div>
                    <div class="col-lg-7">
                        <h5 class="text-secondary lh-lg">GMZStore merupakan layanan yang memudahkan kamu untuk membuat toko topup milik kamu sendiri, selain untuk melakukan topup berbagai item game juga dapat melakukan topup PPOB dan menawarkan jasa kamu seperti jasa Joki dan sebagainya.</h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our great team: End -->
        @endif

        <!-- Pricing plans: Start -->
        <section id="harga" class="section-py bg-body landing-pricing">
            <div class="container">
                <div class="text-center mb-3 pb-1">
                    <span class="badge bg-label-primary">Harga</span>
                </div>
                <h3 class="text-center mb-1"><span class="section-title">Mulai buat tokomu sendiri dengan harga terjangkau</h3>
                <p class="text-center mb-4 pb-3">
                    Berikut merupakan harga yang kami tawarkan untuk pembuatan tokomu. Kamu dapat memulai membuat tokomu dengan gratis :)
                </p>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-center my-3 pt-2">
                                    <div class="avatar flex-shrink-0" style="width: 60px; height: 60px">
                                        <span class="avatar-initial rounded bg-label-primary">
                                            <i class="bx bx-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <h3 class="card-title text-center text-capitalize mb-1">Star</h3>
                                <p class="text-center">Paket toko mudah untuk pemula</p>
                                <div class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <sup class="h6 pricing-currency mt-3 mb-0 me-1 text-primary">Rp</sup>
                                        <h1 class="display-4 mb-0 text-primary">0</h1>
                                        <sub class="h6 pricing-duration mt-auto mb-2 text-muted fw-normal">/bulan</sub>
                                    </div>
                                    <small class="price-note text-muted">selanjutnya Rp. 500.000/bulan</small>
                                </div>
                                <ul class="ps-0 my-5 pt-2 circle-bullets" style="list-style-type: none;">
                                    <li class="mb-2"><i class="bx bx-radio-circle me-2"></i>Dashboard admin untuk kelola transaksi</li>
                                    <li class="mb-2"><i class="bx bx-radio-circle me-2"></i>Laporan penjualan</li>
                                    <li class="mb-2"><i class="bx bx-radio-circle me-2"></i>Pembayaran otomatis payment gateway</li>
                                    <li class="mb-2"><i class="bx bx-radio-circle me-2"></i>Pembayaran manual</li>
                                    <li class="mb-2"><i class="bx bx-radio-circle me-2"></i><strike>Notifikasi order telegram</strike></li>
                                    <li class="mb-2"><i class="bx bx-radio-circle me-2"></i><strike>Sistem membership</strike></li>
                                    <li class="mb-2"><i class="bx bx-radio-circle me-2"></i><strike>Sistem voucher</strike></li>
                                    <li class="mb-2"><i class="bx bx-radio-circle me-2"></i><strike>Domain custom</strike></li>
                                    <li class="mb-0"><i class="bx bx-radio-circle me-2"></i><strike>Technical priority support</strike></li>
                                </ul>
                                <form action="{{ URL::to('register') }}" method="GET">
                                    @csrf
                                    <input type="hidden" name="plan" value="STAR">
                                    <button type="submit" class="btn btn-outline-primary d-grid w-100 py-3">Pilih Paket</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-center my-3 pt-2">
                                    <div class="avatar flex-shrink-0" style="width: 60px; height: 60px">
                                        <span class="avatar-initial rounded bg-label-warning">
                                            <i class="bx bx-box"></i>
                                        </span>
                                    </div>
                                </div>
                                <h3 class="card-title text-center text-capitalize mb-1">Gold</h3>
                                <p class="text-center">Paket toko mudah untuk pemula</p>
                                <div class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <sup class="h6 pricing-currency mt-3 mb-0 me-1 text-warning">Rp</sup>
                                        <h1 class="display-4 mb-0 text-warning">1.000.000</h1>
                                        <sub class="h6 pricing-duration mt-auto mb-2 text-muted fw-normal">/bulan*</sub>
                                    </div>
                                </div>
                                <ul class="ps-0 my-5 pt-2 circle-bullets" style="list-style-type: none;">
                                    <li class="mb-2"><i class="bx bx-radio-circle me-2"></i>Dashboard admin untuk kelola transaksi</li>
                                    <li class="mb-2"><i class="bx bx-radio-circle me-2"></i>Laporan penjualan</li>
                                    <li class="mb-2"><i class="bx bx-radio-circle me-2"></i>Pembayaran otomatis payment gateway</li>
                                    <li class="mb-2"><i class="bx bx-radio-circle me-2"></i>Pembayaran manual</li>
                                    <li class="mb-2"><i class="bx bx-radio-circle me-2"></i>Notifikasi order telegram</li>
                                    <li class="mb-2"><i class="bx bx-radio-circle me-2"></i>Sistem membership</li>
                                    <li class="mb-2"><i class="bx bx-radio-circle me-2"></i><strike>Sistem voucher</strike></li>
                                    <li class="mb-2"><i class="bx bx-radio-circle me-2"></i><strike>Domain custom</strike></li>
                                    <li class="mb-0"><i class="bx bx-radio-circle me-2"></i><strike>Technical priority support</strike></li>
                                </ul>
                                <form action="{{ URL::to('register') }}" method="GET">
                                    @csrf
                                    <input type="hidden" name="plan" value="GOLD">
                                    <button type="submit" class="btn btn-outline-warning d-grid w-100 py-3">Pilih Paket</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-center my-3 pt-2">
                                    <div class="avatar flex-shrink-0" style="width: 60px; height: 60px">
                                        <span class="avatar-initial rounded bg-label-secondary">
                                            <i class="bx bx-card"></i>
                                        </span>
                                    </div>
                                </div>
                                <h3 class="card-title text-center text-capitalize mb-1">Platinum</h3>
                                <p class="text-center">Paket toko mudah untuk pemula</p>
                                <div class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <sup class="h6 pricing-currency mt-3 mb-0 me-1 text-secondary">Rp</sup>
                                        <h1 class="display-4 mb-0 text-secondary">1.500.000</h1>
                                        <sub class="h6 pricing-duration mt-auto mb-2 text-muted fw-normal">/bulan*</sub>
                                    </div>
                                </div>
                                <ul class="ps-0 my-5 pt-2 circle-bullets" style="list-style-type: none;">
                                    <li class="mb-2"><i class="bx bx-radio-circle me-2"></i>Dashboard admin untuk kelola transaksi</li>
                                    <li class="mb-2"><i class="bx bx-radio-circle me-2"></i>Laporan penjualan</li>
                                    <li class="mb-2"><i class="bx bx-radio-circle me-2"></i>Pembayaran otomatis payment gateway</li>
                                    <li class="mb-2"><i class="bx bx-radio-circle me-2"></i>Pembayaran manual</li>
                                    <li class="mb-2"><i class="bx bx-radio-circle me-2"></i>Notifikasi order telegram</li>
                                    <li class="mb-2"><i class="bx bx-radio-circle me-2"></i>Sistem membership</li>
                                    <li class="mb-2"><i class="bx bx-radio-circle me-2"></i>Sistem voucher</li>
                                    <li class="mb-2"><i class="bx bx-radio-circle me-2"></i>Domain custom</li>
                                    <li class="mb-0"><i class="bx bx-radio-circle me-2"></i>Technical priority support</li>
                                </ul>
                                <form action="{{ URL::to('register') }}" method="GET">
                                    @csrf
                                    <input type="hidden" name="plan" value="PLATINUM">
                                    <button type="submit" class="btn btn-outline-secondary d-grid w-100 py-3">Pilih Paket</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing plans: End -->

        <!-- Our great team: Start -->
        <section id="about" class="section-py landing-team">
            <div class="container">
                <div class="row gy-5 mt-2 align-items-center">
                    <div class="col-lg-5">
                        <h5 class="text-secondary">Apa sih GMZStore?</h5>
                        <h2>Jasa pembuatan toko topup gratis pertama di Indonesia.</h2>
                    </div>
                    <div class="col-lg-7">
                        <h5 class="text-secondary lh-lg">GMZStore merupakan layanan yang memudahkan kamu untuk membuat toko topup milik kamu sendiri, selain untuk melakukan topup berbagai item game juga dapat melakukan topup PPOB dan menawarkan jasa kamu seperti jasa Joki dan sebagainya.</h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our great team: End -->

        <!-- FAQ: Start -->
        <section id="faq" class="section-py bg-body landing-faq">
            <div class="container">
                <div class="text-center mb-3 pb-1">
                    <span class="badge bg-label-primary">FAQ</span>
                </div>
                <h3 class="text-center mb-1">Frequently asked <span class="section-title">questions</span></h3>
                <p class="text-center mb-5 pb-3">Untuk menanyakan pertanyaan lebih lanjut silahkan hubungi kontak whatsapp kami.</p>
                <div class="row gy-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="text-center">
                            <img src="{{ asset('assets/img/faq-3d.png') }}" alt="faq boy with logos" class="faq-image" />
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="accordion" id="accordionExample">
                            <div class="card accordion-item active">
                                <h2 class="accordion-header" id="headingOne">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
                                        Apakah GMZStore benar benar gratis?
                                    </button>
                                </h2>

                                <div id="accordionOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Kami menyediakan paket star secara gratis untuk kamu yang ingin membuat tokomu sendiri lalu pada bulan berikutnya akan dikenakan biaya 500.000 per bulan
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                                        Apa yang akan kamu dapatkan?
                                    </button>
                                </h2>
                                <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Kamu akan mendapatkan website dan layanan hosting yang sudah disediakan oleh GMZStore sehingga akan memudahkan kamu untuk mulai berjualan
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionThree" aria-expanded="false" aria-controls="accordionThree">
                                        Berapa biaya pembuatan toko di GMZStore?
                                    </button>
                                </h2>
                                <div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Kamu dapat memilih paket Star, Gold dan Platinum sesuai kebutuhanmu dengan biaya perbulan. Kami mengenakan biaya perbulan untuk melakukan maintenance dan biaya hosting untuk toko kamu.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionFour" aria-expanded="false" aria-controls="accordionFour">
                                        Apakah bisa melakukan custom website toko di GMZStore?
                                    </button>
                                </h2>
                                <div id="accordionFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Untuk layout website sudah di sediakan oleh Tim kami namun kamu dapat melakukan beberapa custom kecil seperti mengubah warna menambah menu dan sebagainya.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionFive" aria-expanded="false" aria-controls="accordionFive">
                                        Produk apa saja yang bisa dijual di GMZStore?
                                    </button>
                                </h2>
                                <div id="accordionFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Selain dapat menjual keperluan topup item game kamu juga dapat menyediakan fasilitas PPOB dan menawarkan jasa joki milikmu.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionSix" aria-expanded="false" aria-controls="accordionSix">
                                        Produk apa saja yang bisa dijual di GMZStore?
                                    </button>
                                </h2>
                                <div id="accordionSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Selain dapat menjual keperluan topup item game kamu juga dapat menyediakan fasilitas PPOB dan menawarkan jasa joki milikmu.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ: End -->

        <!-- Footer: Start -->
        <footer class="landing-footer bg-body footer-text">
            <div class="footer-top" style="background-image: url('{{ asset('assets/img/front-pages/footer-bg-light.png') }}')">
                <div class="container">
                    <div class="row gx-0 gy-4 g-md-5">
                        <div class="col-lg-5">
                            <a href="landing-page.html" class="app-brand-link mb-4">
                                <span class="app-brand-logo demo">
                                    <img width="30" src="{{ asset('assets/img/logo-gmz.png') }}">
                                </span>
                                <span class="app-brand-text footer-link fw-bold ms-2 ps-1">GMZStore</span>
                            </a>
                            <p class="footer-text footer-logo-description mb-4">
                                Jasa pembuatan website topup termurah di indonesia mulai dari Rp. 0
                            </p>
                            <form class="footer-form">
                                <label for="footer-email" class="small">Dapatkan pemberitahuan melalui email</label>
                                <div class="d-flex mt-1">
                                    <input type="email" class="form-control rounded-0 rounded-start-bottom rounded-start-top" id="footer-email" placeholder="Email kamu" />
                                    <button type="submit" class="btn btn-primary shadow-none rounded-0 rounded-end-bottom rounded-end-top">
                                        Langganan
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <h6 class="footer-title mb-4">Halaman</h6>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <a href="#home"  class="footer-link">Home</a>
                                </li>
                                <li class="mb-3">
                                    <a href="#fitur" class="footer-link">Fitur</a>
                                </li>
                                <li class="mb-3">
                                    <a href="#harga" class="footer-link">Harga</a>
                                </li>
                                <li class="mb-3">
                                    <a href="#faq" class="footer-link">FAQ</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <h6 class="footer-title mb-4">Lainnya</h6>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <a href="#" target="_blank" class="footer-link">Syarat dan ketentuan</a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" target="_blank" class="footer-link">Kebijakan dan privasi</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <h6 class="footer-title mb-4">Kontak Kami</h6>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <a href="https://instagram.com/u/gmzstore.id" target="_blank" class="footer-link">Instagram</a>
                                </li>
                                <li class="mb-3">
                                    <a href="https://wa.me/+6283809947465" target="_blank" class="footer-link">WhatsApp</a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" target="_blank" class="footer-link">WhatsApp Group</a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" target="_blank" class="footer-link">Telegram Channel</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom py-3">
                <div class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
                    <div class="mb-2 mb-md-0">
                        <span class="footer-text">©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                        </span>
                        <span class="footer-text">GMZStore. All right reserved</span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer: End -->

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>

        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="{{ asset('assets/vendor/libs/nouislider/nouislider.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>

        <!-- Main JS -->
        <script src="{{ asset('assets/js/front-main.js') }}"></script>


        <!-- Page JS -->
        <script src="{{ asset('assets/js/front-page-landing.js') }}"></script>

</body>

</html>

<!-- beautify ignore:end -->