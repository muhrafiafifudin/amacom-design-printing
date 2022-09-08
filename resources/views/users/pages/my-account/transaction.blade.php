@extends('users.layouts.app')

@section('title')
    Produk
@endsection

@section('content')
<div class="page-style-a">
    <div class="container">
        <div class="page-intro">
            <h2>Pesanan</h2>
            <ul class="bread-crumb">
                <li class="has-separator">
                    <i class="ion ion-md-home"></i>
                    <a href="#">Home</a>
                </li>
                <li class="is-marked">
                    <a href="#">Pesanan</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="page-cart u-s-p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-wrapper u-s-m-b-60">
                    <table>
                        <thead>
                            <tr>
                                <th>Nomor Order</th>
                                <th>Pesanan</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>
                                        <h6>{{ $order->order_number }}</h6>
                                    </td>
                                    <td>
                                        <h6>{{ $order->products->name }}</h6>
                                    </td>
                                    <td>
                                        <h6>
                                            @php
                                                if ($order->process == '0') {
                                                    echo 'Menunggu';
                                                } elseif ($order->process == '1') {
                                                    echo 'Sedang Diproses';
                                                } else {
                                                    echo 'Selesai';
                                                }
                                            @endphp
                                        </h6>
                                    </td>
                                    <td>
                                        <h6>Rp. {{ number_format($order->total, 2, ',', '.') }}</h6>
                                    </td>
                                    <td>
                                        <a href="{{ url('akun/detail-pesanan/' . $order->order_number) }}" class="button button-outline-secondary fas fa-solid fa-eye"></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
