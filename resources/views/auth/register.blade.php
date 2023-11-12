@extends('auth.master')

@section('title', 'GmzStore - Register')

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
        <p class="mb-4">Mulai buat website tokomu dengan mudah</p>

        <form id="form-register" class="mb-3" action="{{ URL::to('auth/register') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username kamu" autofocus required>
            @if($_GET['plan'] != 'PLATINUM')
            <div class="mt-2 d-none" id="url-hint">
              <span class="font-normal mt-2">Alamat website kamu akan menjadi <h6 class="d-inline"></h6></span>
            </div>
            @endif
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email kamu" required>
          </div>
          <div class="mb-3 form-password-toggle">
            <label class="form-label" for="password">Password</label>
            <div class="input-group input-group-merge">
              <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" required />
              <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            </div>
          </div>

          <div class="mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" required>
              <label class="form-check-label" for="terms-conditions">
                Saya menyetujui
                <a href="javascript:void(0);">syarat & ketentuan</a>
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary d-grid w-100">
            Buat Sekarang
          </button>
        </form>
      </div>
    </div>
    <!-- /Register -->
  </div>
</div>

@endsection

@if($_GET['plan'] != 'PLATINUM')
  @section('page-script')
  <script src="{{ asset('assets/js/hint-url.js') }}"></script>
  @endsection
@endif