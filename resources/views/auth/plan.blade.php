@extends('auth.master')

@section('title', 'GmzStore - Pilih Langganan')

@section('page-css')
<style>
    .price-note {
        position: absolute;
        margin: auto;
        left: 0;
        right: 0;
    }
</style>
@endsection

@section('content')

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner" style="max-width: unset">
            <h2 class="text-center mb-2">Pilih Paket</h2>
            <p class="text-center mb-4 pb-2"> Pilih paket yang sesuai dengan kebutuhanmu dengan harga yang terjangkau</p>
            <!-- Register -->
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
                            <form action="{{ URL::to('auth/plan') }}" method="POST">
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
                            <form action="{{ URL::to('auth/plan') }}" method="POST">
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
                            <form action="{{ URL::to('auth/plan') }}" method="POST">
                                @csrf
                                <input type="hidden" name="plan" value="PLATINUM">
                                <button type="submit" class="btn btn-outline-secondary d-grid w-100 py-3">Pilih Paket</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
</div>

@endsection

@section('page-script')
<script src="{{ asset('assets/js/hint-url.js') }}"></script>
@endsection