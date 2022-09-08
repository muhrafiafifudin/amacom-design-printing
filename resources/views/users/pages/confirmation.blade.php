@extends('users.layouts.confirmation')

@section('title')
    Konfirmasi
@endsection

@section('content')
<div id="app">
    <div class="page-checkout-confirm">
        <div class="vertical-center">
            <div class="text-center">
                <h1>Terima Kasih!</h1>
                <h5>Untuk pembayaran cod atau transfer. Silahkan hubungi nomor berikut
                    <ins><a href="#">081234126978</a></ins>.
                </h5>
                <a href="{{ url('/') }}" class="thank-you-back">Kembali ke Beranda</a>
            </div>
        </div>
    </div>
</div>
@endsection
