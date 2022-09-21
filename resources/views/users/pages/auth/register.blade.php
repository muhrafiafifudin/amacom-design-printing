@extends('users.layouts.app')

@section('title')
    Register
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
        <!-- Register -->
        <div class="reg-wrapper">
            <h2 class="account-h2 u-s-m-b-20">Register</h2>
            <h6 class="account-h6 u-s-m-b-30">Registering for this site allows you to access your order status and history.</h6>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                @method('POST')

                <div class="u-s-m-b-30">
                    <label for="name">Nama Lengkap
                        <span class="astk">*</span>
                    </label>
                    <input type="text" name="name" id="name" class="text-field" placeholder="Masukkan Nama Lengkap ...">
                </div>
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
                <div class="u-s-m-b-30">
                    <label for="password_confirmation">Ulangi Password
                        <span class="astk">*</span>
                    </label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="text-field" placeholder="Password">
                </div>
                <div class="u-s-m-b-30">
                    <input type="checkbox" class="check-box" id="accept">
                    <label class="label-text no-color" for="accept">I’ve read and accept the
                        <a href="#" class="u-c-brand">terms & conditions</a>
                    </label>
                </div>
                <div class="u-s-m-b-45">
                    <button type="submit" class="button button-primary w-100">Register</button>
                </div>
            </form>
        </div>
        <!-- Register /- -->
    </div>
</div>
@endsection
