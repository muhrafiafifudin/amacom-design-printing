@extends('users.layouts.app')

@section('title')
    Login
@endsection

@section('content')
<div class="page-style-a">
    <div class="container">
        <div class="page-intro">
            <h2>Account</h2>
            <ul class="bread-crumb">
                <li class="has-separator">
                    <i class="ion ion-md-home"></i>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="is-marked">
                    <a href="#">Account</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="page-account u-s-p-t-80">
    <div class="container">
        <!-- Login -->
        <div class="login-wrapper">
            <h2 class="account-h2 u-s-m-b-20">Login</h2>
            <h6 class="account-h6 u-s-m-b-30">Selamat Datang!! Belum mempunyai akun ? <span><a href="{{ route('register') }}">Daftar disini</a></span></h6>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                @method('POST')

                <div class="u-s-m-b-30">
                    <label for="email">Email
                        <span class="astk">*</span>
                    </label>
                    <input type="text" name="email" id="email" class="text-field" placeholder="Masukkan Email ...">
                </div>
                <div class="u-s-m-b-30">
                    <label for="password">Password
                        <span class="astk">*</span>
                    </label>
                    <input type="password" name="password" id="password" class="text-field" placeholder="Masukkan Password ...">
                </div>
                <div class="m-b-45">
                    <button type="submit" class="button button-outline-secondary w-100">Login</button>
                </div>
            </form>
        </div>
        <!-- Login /- -->
    </div>
</div>
@endsection
