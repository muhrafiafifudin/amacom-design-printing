@extends('users.layouts.app')

@section('title')
    Invoice
@endsection

@section('content')
<div class="page-style-a">
    <div class="container">
        <div class="page-intro">
            <h2>Detail Pesanan</h2>
            <ul class="bread-crumb">
                <li class="has-separator">
                    <i class="ion ion-md-home"></i>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="has-separator">
                    <a href="{{ url('akun/pesanan') }}">Pesanan</a>
                </li>
                <li class="is-marked">
                    <a href="#">Detail Pesanan</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="page-checkout u-s-p-t-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="section-h4">Detail Pesanan</h4>
                            <!-- Form-Fields -->
                            <div class="group-inline u-s-m-b-13">
                                <div class="group-1 u-s-p-r-16">
                                    <label for="name">Nama Pelanggan</label>
                                    <input type="text" id="name" class="text-field" value="{{ $transactions->users->name }}" disabled>
                                </div>
                                <div class="group-2">
                                    <label for="phone_number">Nomor Telepon Pelanggan</label>
                                    <input type="text" id="phone_number" class="text-field" value="{{ $transactions->phone_number }}" disabled>
                                </div>
                            </div>
                            <div class="u-s-m-b-30">
                                <label for="order-notes">Catatan</label>
                                <textarea class="text-area" id="order-notes" disabled>{{ $transactions->note }}</textarea>
                            </div>

                            <h4 class="section-h4">Pesanan</h4>

                        </div>
                        <div class="col-lg-12">
                            <div class="order-table u-s-m-b-30">
                                <table class="u-s-m-b-13">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6 class="order-h6">{{ $transactions->products->name }}</h6>
                                                <span class="order-span-quantity">x {{ $transactions->products_qty }}</span>
                                            </td>
                                            <td>
                                                <h6 class="order-h6">Rp. {{ number_format($transactions->products->price, 2, ',', '.') }}</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 class="order-h3">Total</h3>
                                            </td>
                                            <td>
                                                <h3 class="order-h3">Rp. {{ number_format($transactions->products->price * $transactions->products_qty, 2, ',', '.') }}</h3>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <a href="{{ url('akun/pesanan') }}" class="button button-outline-secondary">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
