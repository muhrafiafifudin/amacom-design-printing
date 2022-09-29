@extends('admin.layouts.app')

@section('title')
    Form Tambah Produk
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Tambah Produk</h4>
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
                            <a href="#">Tambah Produk</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    Form Tambah Produk
                                </div>
                                <div class="card-category">
                                    Menambahkan daftar produk sesuai yang tertera pada website.
                                </div>
                            </div>
                            <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Nama Produk</label>
                                        <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Produk ..." required>
                                        <small id="categoryText" class="form-text text-muted">Nama produk untuk identitas setiap item.</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <input type="file" class="form-control-file" name="images" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="categories_id">Kategori</label>
                                        <select class="form-control" name="categories_id" id="categories_id" required>
                                            <option value="">Pilih Kategori</option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Deskripsi</label>
                                        <textarea class="form-control markdown-input" name="description" rows="15"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Harga</label>
                                        <input type="number" name="price" class="form-control" placeholder="Masukkan Harga Produk ..." required />
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" name="products_slug" class="form-control" placeholder="Masukkan Slug / Link Produk ..." required />
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

