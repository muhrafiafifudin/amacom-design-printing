@extends('users.layouts.app')

@section('title')
    Home
@endsection

@section('content')
<div class="default-height ph-item">
    <div class="slider-main owl-carousel">
        <div class="bg-image one">
            <div class="slide-content slide-animation">
                <h1>Casual Clothing</h1>
                <h2>lifestyle / clothing / hype</h2>
            </div>
        </div>
    </div>
</div>

<section class="app-priority u-s-m-t-50">
    <div class="container">
        <div class="priority-wrapper u-s-m-b-80">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single-item-wrapper">
                        <div class="single-item-icon">
                            <i class="ion ion-md-star"></i>
                        </div>
                        <h2>
                            Great Value
                        </h2>
                        <p>We offer competitive prices on our 100 million plus product range</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single-item-wrapper">
                        <div class="single-item-icon">
                            <i class="ion ion-md-cash"></i>
                        </div>
                        <h2>
                            Shop with Confidence
                        </h2>
                        <p>Our Protection covers your purchase from click to delivery</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single-item-wrapper">
                        <div class="single-item-icon">
                            <i class="ion ion-ios-card"></i>
                        </div>
                        <h2>
                            Safe Payment
                        </h2>
                        <p>Pay with the world’s most popular and secure payment methods</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single-item-wrapper">
                        <div class="single-item-icon">
                            <i class="ion ion-md-contacts"></i>
                        </div>
                        <h2>
                            24/7 Help Center
                        </h2>
                        <p>Round-the-clock assistance for a smooth shopping experience</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-maker u-s-m-t-50">
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
