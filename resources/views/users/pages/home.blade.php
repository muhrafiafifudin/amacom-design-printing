@extends('users.layouts.app')

@section('title')
    Home
@endsection

@section('content')
<div class="default-height ph-item">
    <div class="slider-main owl-carousel">
        <div class="bg-image">
            <div class="slide-content slide-animation">
                <img src="{{ asset('users/images/banners/banner-homepage.jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>

<section class="app-priority u-s-m-t-20">
    <div class="container">
        <div class="priority-wrapper u-s-m-b-80">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-item-wrapper">
                        <div class="single-item-icon">
                            <i class="ion ion-md-checkmark-circle"></i>
                        </div>
                        <h2>
                            Pelayanan Cepat
                        </h2>
                        <p>Melayani pekerjaan anda dengan cepat, maksimal dan amanah</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-item-wrapper">
                        <div class="single-item-icon">
                            <i class="ion ion-md-cash"></i>
                        </div>
                        <h2>
                            Biaya Terjangkau
                        </h2>
                        <p>Biaya dapat bersaing dengan yang lain</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-item-wrapper">
                        <div class="single-item-icon">
                            <i class="ion ion-md-contacts"></i>
                        </div>
                        <h2>
                            Kepuasan Anda, Prioritas Kami
                        </h2>
                        <p>Mengutamakan kepuasan anda, dan menjadikan prioritas utama</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-maker u-s-m-t-20">
    <div class="container">
        <div class="sec-maker-header text-center">
            <h3 class="sec-maker-h3">SEMUA JASA YANG TERSEDIA</h3>
            <span class="sec-maker-span-text u-s-m-b-8 d-block">Amacom menyediakan berbagai jasa</span>
        </div>
        <div class="row product-container grid-style">
            @foreach ($products as $product)
                <div class="product-item col-lg-3">
                    <div class="item">
                        <div class="image-container">
                            <a class="item-img-wrapper-link" href="{{ url('produk-detail/' . $product->products_slug) }}">
                                <img class="img-fluid" src="{{ asset('admin/img/product/' . $product->images) }}" alt="Product" width="488px" height="488px">
                            </a>
                        </div>
                        <div class="item-content">
                            <div class="what-product-is">
                                <ul class="bread-crumb">
                                    <li class="has-separator">
                                        <a href="shop-v1-root-category.html">Men's</a>
                                    </li>
                                    <li class="has-separator">
                                        <a href="shop-v2-sub-category.html">Tops</a>
                                    </li>
                                    <li>
                                        <a href="shop-v3-sub-sub-category.html">Hoodies</a>
                                    </li>
                                </ul>
                                <h6 class="item-title">
                                    <a href="{{ url('produk-detail/' . $product->products_slug) }}">{{ $product->name }}</a>
                                </h6>
                            </div>
                            <div class="price-template">
                                <div class="item-new-price">
                                    Rp. {{ number_format($product->price, 2, ',', '.') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
