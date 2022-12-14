@extends('admin.layouts.app')

@section('title')
    Form Tambah Pelanggan
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Tambah Pelanggan</h4>
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
                            <a href="{{ route('admin.pelanggan.index') }}">Pelanggan</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.pelanggan.create') }}">Tambah Penguna</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    Form Tambah Pelanggan
                                </div>
                                <div class="card-category">
                                    Menambahkan daftar pelanggan untuk mengakses halaman web.
                                </div>
                            </div>
                            <form action="{{ route('admin.pelanggan.store') }}" method="POST">
                                @csrf
                                @method('POST')

                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="name">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan nama pelanggan ..." required>
                                            <small id="nameText" class="form-text text-muted">Nama lengkap identitas user.</small>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan email pelanggan ..." required>
                                            <small id="emailText" class="form-text text-muted">Password default : <strong>12345678</strong>.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <a href="{{ route('admin.pelanggan.index') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
