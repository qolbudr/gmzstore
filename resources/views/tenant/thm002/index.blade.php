@extends('tenant.thm001.master')

@section('page-css')
<style>
    .medium {
        font-size: 100%;
    }

    .landing-navbar .btn {
        background-color: #05435a !important;
        border-color: #05435a !important;
        color: white;
    }

    .landing-hero-wrap {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        z-index: 0;
    }

    .landing-hero {
        background-color: #05435a;
        height: 45vh;
    }

    .landing-navbar {
        background-color: white;
    }

    .nav-link.active {
        color: #05435a !important;
    }

    .landing-navbar .nav-link {
        padding: 0.5rem 0.9375rem !important;
        color: grey;
    }

    .carousel img {
        object-fit: cover;
        height: 100%;
        border-radius: 10px;
    }

    @media only screen and (max-width: 1400px) {
        .landing-hero {
            height: 35vh;
        }
    }

    @media only screen and (max-width: 1200px) {
        .landing-hero {
            height: 33vh;
        }
    }

    @media only screen and (max-width: 991px) {
        .landing-hero {
            height: 28vh;
        }
    }

    @media only screen and (max-width: 767px) {
        .landing-hero {
            height: 23vh;
        }
    }

    @media only screen and (max-width: 575px) {
        .landing-hero {
            height: 20vh;
        }
    }

    @media only screen and (max-width: 460px) {
        .landing-hero {
            height: 18vh;
        }
    }

    svg {
        fill: #05435a;
    }

    .item-row a {
        text-align: center;
        background-color: #05435a;
    }

    .item-row svg {
        margin-top: -35px;
    }

    .item-row .box-title {
        margin-top: -20px;
    }

    .item-row h1 {
        color: white !important;
    }

    .section-news {
        background-color: #05435a10;
    }

    .container-category {
        scrollbar-width: none;
        /* Firefox */
        -ms-overflow-style: none;
        /* IE and Edge */
    }

    .container-category::-webkit-scrollbar {
        display: none;
    }

    .btn-outline-primary {
        border-color: #05435a !important;
        color: #05435a;
    }

    .btn-outline-primary:hover,
    .btn-outline-primary:focus {
        background-color: #05435a !important;
    }

    .news-item a {
        background-color: #05435a;
    }

    .news-item .box-title {
        background-color: #05435a;
    }

    .box-title h1 {
        color: white;
    }

    .feature .bx {
        font-size: 3.15rem !important;
    }

    .footer svg {
        fill: black;
    }

    .footer .wrap {
        color: white;
        margin-top: -1px;
        background-color: black;
        font-size: 14px;
    }

    
</style>
@endsection

@section('title', 'Store')

@section('content')
<nav class="navbar shadow-none py-0">
    <div class="container">
        <div class="navbar-expand-lg landing-navbar px-3 py-2 py-sm-3 w-100 px-md-4 rounded mt-3 border d-flex">
            <!-- Menu logo wrapper: Start -->
            <div class="navbar-brand app-brand demo d-lg-none d-flex me-4 text-white">
                <!-- Mobile menu toggle: Start-->
                <button class="navbar-toggler border-0 px-0 me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="tf-icons bx bx-menu bx-sm align-middle"></i>
                </button>
                <!-- Mobile menu toggle: End-->

                <!-- Logo -->
            </div>
            <!-- Menu logo wrapper: End -->
            <!-- Menu wrapper: Start -->
            <div class="collapse navbar-collapse landing-nav-menu">
                <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="tf-icons bx bx-x bx-sm"></i>
                </button>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-medium active" href="{{ URL::to('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="{{ URL::to('pricelist') }}">Pricelist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="{{ URL::to('order') }}">Cek order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="{{ URL::to('blog') }}">Promo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="{{ URL::to('kontak') }}">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="{{ URL::to('tentang') }}">Tentang</a>
                    </li>
                </ul>
            </div>
            <div class="landing-menu-overlay d-lg-none"></div>
            <!-- Menu wrapper: End -->
            <!-- Toolbar: Start -->
            @if(config('config.plan') != 'STAR')
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- navbar button: Start -->
                <li>
                    <a href="../vertical-menu-template/auth-login-cover.html" class="btn btn-primary" target="_blank"><span class="tf-icons bx bx-user me-md-1"></span><span class="d-none d-md-block">Login/Register</span></a>
                </li>
                <!-- navbar button: End -->
            </ul>
            @endif
            <!-- Toolbar: End -->
        </div>
    </div>
</nav>
<div class="landing-hero-wrap">
    <div class="section-py landing-hero"></div>
    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 87" style="width: 100%;">
        <path id="Background" class="s0" d="m0 22.3l168 55.7 171-51 117 48 80-45 114 57 228-55 73 21 135-53 194 87v-87h-1280z" />
    </svg>
</div>
<div class="container carousel-container mt-4">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://assets.jajangame.com/2023/09/2b0c8d7d732d8f1f0f00277d05edf28a.png" alt="First slide" />
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://assets.jajangame.com/2023/06/b9ec9205769bdaac58e1163fda0349d4.png" alt="Second slide" />
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</div>

<div class="container d-flex overflow-scroll py-4 container-category">
    <button type="button" class="btn rounded-pill btn-outline-primary me-2">Secondary</button>
    <button type="button" class="btn rounded-pill btn-outline-primary me-2">Secondary</button>
    <button type="button" class="btn rounded-pill btn-outline-primary me-2">Secondary</button>
    <button type="button" class="btn rounded-pill btn-outline-primary me-2">Secondary</button>
</div>

<div class="container item-row">
    <div class="row g-2 g-md-4">
        <div class="col-4 col-md-3 col-lg-2 d-inline-flex">
            <a class="rounded" href="#">
                <img class="rounded-top w-100" src="https://assets.jajangame.com/2022/11/9ef252294c4a6f9c39cb3a44926b5c9a.png">
                <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 87" style="width: 100%; transform: rotate(180deg)">
                    <path id="Background" class="s0" d="m0 22.3l168 55.7 171-51 117 48 80-45 114 57 228-55 73 21 135-53 194 87v-87h-1280z" />
                </svg>
                <div class="p-2 box-title rounded-bottom">
                    <h1 class="small w-100">Mobile Legends</h1>
                </div>
            </a>
        </div>
        <div class="col-4 col-md-3 col-lg-2 d-inline-flex">
            <a class="rounded" href="#">
                <img class="rounded-top w-100" src="https://cdn1.codashop.com/S/content/mobile/images/product-tiles/Brawl-Stars-Codacash.jpg">
                <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 87" style="width: 100%; transform: rotate(180deg)">
                    <path id="Background" class="s0" d="m0 22.3l168 55.7 171-51 117 48 80-45 114 57 228-55 73 21 135-53 194 87v-87h-1280z" />
                </svg>
                <div class="p-2 box-title rounded-bottom">
                    <h1 class="small w-100">Snowbreak</h1>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="section-news my-5 py-5">
    <div class="container text-lg-center">
        <h3 class="mb-1">Promo</h3>
        <p class="mb-3 mb-md-5">
            Baca berita dan promo transaksi.
        </p>
        <div class="row g-4">
            <div class="col-6 col-lg-4 d-inline-flex">
                <div class="news-item text-start">
                    <a class="rounded" href="#">
                        <img class="w-100 rounded-top" src="https://assets.jajangame.com/2023/09/2b0c8d7d732d8f1f0f00277d05edf28a.png">
                        <div class="p-2 box-title rounded-bottom">
                            <h1 class="medium w-100 mt-2 mb-2">Snowbreak: Containment Zone</h1>
                            <h1 class="small">ini deskripsi</h1>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="feature my-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="row align-items-start">
                    <div class="col-2">
                        <i class="bx bx-timer"></i>
                    </div>
                    <div class="col-10">
                        <h5>Pembayaran Tercepat</h5>
                        <p>Didukung dengan pembayaran instant yang dapat menyelesaikan pesananmu secara otomatis</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row align-items-start">
                    <div class="col-2">
                        <i class="bx bx-navigation"></i>
                    </div>
                    <div class="col-10">
                        <h5>Pengiriman instant</h5>
                        <p>Item dikirim langsung ke akunmu tepat setelah proses pembayaran kamu selesaikan</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row align-items-start">
                    <div class="col-2">
                        <i class="bx bx-mobile"></i>
                    </div>
                    <div class="col-10">
                        <h5>Responsive</h5>
                        <p>Tampilan responsive dapat diakses di segala jenis device kamu kapan saja dan dimana saja</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row align-items-start">
                    <div class="col-2">
                        <i class="bx bx-store"></i>
                    </div>
                    <div class="col-10">
                        <h5>Vendor Terpercaya</h5>
                        <p>Terintegerasi dengan vendor topup terpercaya dan terkemuka seperti Apigames dan lain lain.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer d-none d-lg-block">
    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 87" style="width: 100%; transform: rotate(180deg)">
        <path id="Background" class="s0" d="m0 22.3l168 55.7 171-51 117 48 80-45 114 57 228-55 73 21 135-53 194 87v-87h-1280z" />
    </svg>
    <div class="wrap">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                    © 2023 Jajan Game. All Rights Reserved
                    All other trademarks belong to their respective owners
                    Versi 1.1.2
                </div>
            </div>
        </div>
    </div>
</div>

@endsection