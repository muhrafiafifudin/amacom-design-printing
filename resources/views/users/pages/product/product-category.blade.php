@extends('users.layouts.app')

@section('title')
    Produk
@endsection

@section('content')
<div class="page-style-a">
    <div class="container">
        <div class="page-intro">
            <h2>{{ $productCategories->type == 0 ? 'Jasa' : 'Print' }}</h2>
            <ul class="bread-crumb">
                <li class="has-separator">
                    <i class="ion ion-md-home"></i>
                    <a href="#">Home</a>
                </li>
                <li class="has-separator">
                    <a href="#">{{ $productCategories->type == 0 ? 'Jasa' : 'Print' }}</a>
                </li>
                <li class="is-marked">
                    <a href="#">{{ $productCategories->category }}</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="page-shop u-s-p-t-20">
    <div class="container">
        <div class="row">
            <!-- Shop-Right-Wrapper -->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <!-- Page-Bar -->
                <div class="page-bar clearfix">
                    <!-- Toolbar Sorter 1  -->
                    <div class="toolbar-sorter">
                        <div class="select-box-wrapper">
                            <label class="sr-only" for="sort-by">Sort By</label>
                            <select class="select-box" id="sort-by">
                                <option selected="selected" value="">Sort By: Best Selling</option>
                                <option value="">Sort By: Latest</option>
                                <option value="">Sort By: Lowest Price</option>
                                <option value="">Sort By: Highest Price</option>
                                <option value="">Sort By: Best Rating</option>
                            </select>
                        </div>
                    </div>
                    <!-- //end Toolbar Sorter 1  -->
                    <!-- Toolbar Sorter 2  -->
                    <div class="toolbar-sorter-2">
                        <div class="select-box-wrapper">
                            <label class="sr-only" for="show-records">Show Records Per Page</label>
                            <select class="select-box" id="show-records">
                                <option selected="selected" value="">Show: 8</option>
                                <option value="">Show: 16</option>
                                <option value="">Show: 28</option>
                            </select>
                        </div>
                    </div>
                    <!-- //end Toolbar Sorter 2  -->
                </div>
                <!-- Page-Bar /- -->
                <!-- Row-of-Product-Container -->
                <div class="row product-container grid-style">
                    @foreach ($products as $product)
                        <div class="product-item col-lg-3">
                            <div class="item">
                                <div class="image-container">
                                    <a class="item-img-wrapper-link" href="{{ url('produk-detail/' . $product->products_slug) }}">
                                        <img class="img-fluid" src="users/images/product/product@3x.jpg" alt="Product">
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
