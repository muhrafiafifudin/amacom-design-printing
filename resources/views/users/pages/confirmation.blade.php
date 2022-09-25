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
                <h5>Untuk pembayaran cod atau transfer. Silahkan hubungi nomor Whatsapp berikut
                    <ins><a href="https://wa.me/62895411737739" target="_blank">0895411737739</a></ins> (Mas Eko).
                </h5>

                <div class="u-s-m-b-15 u-s-m-t-15">
                    <ul class="mid-nav g-nav u-s-m-b-80">
                        <li>
                            <a href="#">
                                <i class="ion ion-ios-card"></i>
                                <h5>Bank Transfer (BNI)</h5>
                                <h5><strong>3002476427</strong></h5>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="u-s-m-l-60">
                                <i class="ion ion-md-phone-portrait "></i>
                                <h5>ShopeePay</h5>
                                <h5><strong>0895411737739</strong></h5>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="u-s-m-b-30">
                    <h5>
                        Setelah pembayaran, silahkan konfirmasi melalui Whatsapp diatas.
                    </h5>
                </div>

                <a href="{{ url('/') }}" class="thank-you-back">Kembali ke Beranda</a>
            </div>
        </div>
    </div>
</div>
@endsection
