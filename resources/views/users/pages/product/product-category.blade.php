@extends('users.layouts.app')

@section('title')
    Produk
@endsection

@section('content')
<div class="default-height ph-item">
    <div class="slider-main owl-carousel">
        <div class="bg-image">
            <div class="slide-content slide-animation">
                @if ($productCategories->type == 0)
                    <img src="{{ asset('users/images/banners/banner-design.jpg') }}" alt="">
                @else
                    <img src="{{ asset('users/images/banners/banner-print.jpg') }}" alt="">
                @endif
            </div>
        </div>
    </div>
</div>

<div class="page-shop u-s-p-t-80">
    <div class="container">
        <div class="row">
            <!-- Shop-Right-Wrapper -->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <!-- Row-of-Product-Container -->
                <div class="row product-container grid-style">
                    @foreach ($products as $product)
                        <div class="product-item col-lg-3">
                            <div class="item">
                                <div class="image-container">
                                    <a class="item-img-wrapper-link" href="{{ url('produk-detail/' . $product->products_slug) }}">
                                        <img class="img-fluid" src="{{ asset('admin/img/product/' . $product->images) }}" alt="Product">
                                    </a>
                                </div>
                                <div class="item-content">
                                    <div class="what-product-is">

                                        <h6 class="item-title">
                                            <a href="{{ url('produk-detail/' . $product->products_slug) }}">{{ $product->name }}</a>
                                        </h6>
                                        <div class="item-description">
                                            <p>This hoodie is full cotton. It includes a muff sewn onto the lower front, and (usually) a drawstring to adjust the hood opening. Throughout the U.S., it is common for middle-school, high-school, and college students to wear this sweatshirts—with or without hoods—that display their respective school names or mascots across the chest, either as part of a uniform or personal preference.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="price-template">
                                        <div class="item-new-price">
                                            Rp. {{ number_format($product->price, 2, ',', '.') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="tag new">
                                    <span>NEW</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Row-of-Product-Container /- -->
            </div>
            <!-- Shop-Right-Wrapper /- -->
        </div>
    </div>
</div>
@endsection
