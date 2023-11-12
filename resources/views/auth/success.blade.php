@extends('auth.master')

@section('title', 'GmzStore - Berhasil')


@section('page-script')
<script src="{{ asset('assets/js/hint-url.js') }}"></script>
@endsection



@section('content')

<div class="authentication-wrapper authentication-cover">
    <div class="authentication-inner row m-0 g-0">

        <!-- /Left Text -->
        <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center">
            <div class="w-100 h-100">
                <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid object-fit-cover h-100 w-100 flip-horizontal" alt="hero-img">
            </div>
        </div>
        <!-- /Left Text -->

        <!-- Register -->
        <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
            <div class="w-px-400 mx-auto">
                <div class="d-flex justify-content-center my-3 pt-2">
                    <div class="avatar flex-shrink-0" style="width: 60px; height: 60px">
                        <span class="avatar-initial rounded bg-label-success">
                            <i class="bx bx-check"></i>
                        </span>
                    </div>
                </div>
                <h2 class="text-center mb-2">Selamat 🤝</h2>
                @if($_GET['plan'] != 'PLATINUM')
                    <p class="text-center mb-4 pb-2"> Websitemu tokomu telah berhasil dibuat </p>
                    <h5 class="mt-4">Berikut adalah alamat website toko kamu</h5>
                    <div class="alert alert-secondary d-flex justify-content-between align-items-center" role="alert">
                        <div class="text">https://{{ $username }}.{{ $main_domain }}</div>
                        <a href="https://{{ $username }}.{{ $main_domain }}" target="_blank" class="btn btn-outline-secondary">Kunjungi</a>
                    </div>
                    <p class="text-muted mt-4">Silahkan lakukan pembayaran ke admin untuk melakukan proses aktivasi website kamu</p>
                @else
                    <p class="text-center mb-4 pb-2"> Registrasi Berhasil </p>
                    <p class="text-muted mt-4">Silahkan lakukan pembayaran ke admin untuk melakukan proses aktivasi website kamu</p>
                @endif
                <a href="https://wa.me/+6283809947465" class="btn btn-primary d-grid w-100 mt-5 py-3">Hubungi Admin</a>
            </div>
        </div>
    </div>
    <!-- /Register -->
</div>
</div>

@endsection