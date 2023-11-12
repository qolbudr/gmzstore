@extends('auth.master')

@section('title', 'GmzStore - Pilih Tema')

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
                <!-- Logo -->
                <div class="app-brand mb-5">
                    <a href="index.html" class="app-brand-link gap-2">
                        <span class="app-brand-logo demo">
                            <img style="width: 50px" src="{{ asset('assets/img/logo-gmz.png') }}">
                        </span>
                    </a>
                </div>
                <!-- /Logo -->
                <h4 class="mb-2">GmzStore</h4>
                <p class="mb-4">Pilih tema untuk toko websitemu</p>

                <form id="form-theme" class="mb-3" action="{{ URL::to('auth/theme') }}" method="POST">
                    @csrf
                    <input type="hidden" name="theme" value="thm001">
                    <div class="mb-3">
                        <div data-value="thm001" class="card border-2 border-primary card-theme cursor-pointer">
                            <div class="card-body">
                                <h5 class="mb-2">Tema 1</h5>
                                <p class="text-muted">Gunakan tema 1 untuk tokomu</p>
                                <a href="#">Lihat Preview</a>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary d-grid w-100">
                        Pilih Tema
                    </button>
                </form>
            </div>
        </div>
        <!-- /Register -->
    </div>
</div>

@endsection

@section('page-script')
<script>
    $('.card-theme').on('click', function() {
        $('.card-theme').removeClass('border-2');
        $('.card-theme').removeClass('border-primary');
        $(this).addClass('border-2');
        $(this).addClass('border-primary');
        const value = $(this).attr('data-value');

        $("[name=theme]").val(value);
    });
</script>
@endsection