@extends('admin.layouts.app')

@section('title')
    Form Edit Produk
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Edit Produk</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="flaticon-home"></i>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.produk.index') }}">Produk</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Edit Produk</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    Form Edit Produk
                                </div>
                                <div class="card-category">
                                    Mengubah informasi produk sesuai yang tertera pada website.
                                </div>
                            </div>
                            <form action="{{ route('admin.produk.update', $products->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Nama Produk</label>
                                        <input type="text" class="form-control" name="name" value="{{ $products->name }}" placeholder="Masukkan Nama Produk ..." required />
                                        <small id="categoryText" class="form-text text-muted">Nama produk untuk identitas setiap item.</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="images" />
                                            <label class="custom-file-label">{{ $products->images }}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="categories_id">Kategori</label>
                                        <select class="form-control" name="categories_id" id="categories_id">
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $category->id == $products->categories_id ? 'selected' : '' }}>{{ $category->category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Deskripsi</label>
                                        <textarea class="form-control markdown-input" name="description" rows="15">{{ $products->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Harga</label>
                                        <input type="number" name="price" class="form-control" value="{{ $products->price }}" placeholder="Masukkan Harga Produk ..." required />
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" name="products_slug" class="form-control" value="{{ $products->products_slug }}" placeholder="Masukkan Slug / Link Produk ..." required />
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <a href="{{ route('admin.kategori.index') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

