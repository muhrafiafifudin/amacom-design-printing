@extends('users.layouts.app')

@section('title')
    Detail Produk
@endsection

@section('content')
<div class="page-style-a">
    <div class="container">
        <div class="page-intro">
            <h2>Detail</h2>
            <ul class="bread-crumb">
                <li class="has-separator">
                    <i class="ion ion-md-home"></i>
                    <a href="home.html">Home</a>
                </li>
                <li class="is-marked">
                    <a href="single-product.html">Detail</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="page-detail u-s-p-t-80">
    <div class="container">
        <!-- Product-Detail -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <!-- Product-zoom-area -->
                <div class="zoom-area">
                    <img id="zoom-pro" class="img-fluid" src="{{ asset('admin/img/product/' . $products->images) }}" data-zoom-image="users/images/product/product@4x.jpg" alt="Zoom Image">
                </div>
                <!-- Product-zoom-area /- -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <!-- Product-details -->
                <div class="all-information-wrapper">
                    <div class="section-1-title-breadcrumb-rating">
                        <div class="product-title">
                            <h1>
                                <a href="#">{{ $products->name }}</a>
                            </h1>
                        </div>
                    </div>
                    <div class="section-2-short-description u-s-p-y-14">
                        <h6 class="information-heading u-s-m-b-8">Deskripsi :</h6>
                        <p>{{ $products->description }}</p>
                    </div>
                    <div class="section-3-price-original-discount u-s-p-y-14">
                        <div class="price">
                            <h4>Rp. {{ number_format($products->price, 2, ',', '.') }}</h4>
                        </div>
                    </div>
                    <div class="section-6-social-media-quantity-actions">
                        <form action="{{ route('checkout.placeorder') }}" class="post-form" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')

                            <input type="hidden" name="products_id" value="{{ $products->id }}">
                            <input type="hidden" name="price" value="{{ $products->price }}">

                            <div class="quantity-wrapper u-s-m-b-22">
                                <span>Quantity:</span>
                                <div class="quantity">
                                    <input type="text" class="quantity-text-field" value="1" name="products_qty">
                                    <a class="plus-a" data-max="1000">&#43;</a>
                                    <a class="minus-a" data-min="1">&#45;</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control" name="file" placeholder="Masukkan File ..." required>
                            </div>
                            <div class="form-group">
                                <label for="phone_number">Nomor Telepon</label>
                                <input type="text" class="form-control" name="phone_number" placeholder="Masukkan Nomor Telepon ..." required>
                            </div>
                            <div class="form-group">
                                <label for="note">Catatan</label>
                                <textarea class="form-control" name="note" id="" cols="30" rows="10"></textarea>
                            </div>

                            <div>
                                <button class="button button-outline-secondary" type="submit">Pesan</button>
                                <a href="{{ url('/') }}" class="button button-outline-secondary u-s-m-l-5">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Product-details /- -->
            </div>
        </div>
        <!-- Product-Detail /- -->
    </div>
</div>
@endsection
