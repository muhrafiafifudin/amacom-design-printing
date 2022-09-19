<header>
    <!-- Top-Header -->
    <div class="full-layer-outer-header">
        <div class="container clearfix">
            <nav>
                @if (Route::has('login'))
                    <ul class="secondary-nav g-nav">
                        @auth
                            <li>
                                <a>Selamat Datang, {{ Auth::user()->name }}
                                    <i class="fas fa-chevron-down u-s-m-l-9"></i>
                                </a>
                                <ul class="g-dropdown" style="width:200px">
                                    <li>
                                        <a href="{{ url('akun/pesanan') }}">
                                            <i class="far fa-check-circle u-s-m-r-9"></i>
                                            Pesanan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-in-alt u-s-m-r-9"></i>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li>
                                <a>My Account
                                    <i class="fas fa-chevron-down u-s-m-l-9"></i>
                                </a>
                                <ul class="g-dropdown" style="width:200px">
                                    <li>
                                        <a href="{{ route('login') }}">
                                            <i class="fas fa-sign-in-alt u-s-m-r-9"></i>
                                            Login / Signup
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endauth
                    </ul>
                @endif
            </nav>
        </div>
    </div>
    <!-- Top-Header /- -->
    <!-- Mid-Header -->
    <div class="full-layer-mid-header">
        <div class="container">
            <div class="row clearfix align-items-center">
                <div class="col-lg-3">
                    <div class="brand-logo text-lg-center">
                        <a href="{{ url('/') }}">
                            <h2><strong>AMACOM</strong></h2>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <ul class="bottom-nav g-nav u-d-none-lg">
                        <li>
                            <a href="{{ url('produk/' . $services->type ) }}">Jasa
                                <i class="fas fa-chevron-down u-s-m-l-9"></i>
                            </a>
                            <ul class="g-dropdown" style="width:200px">
                                @foreach ($nav_services as $service)
                                    <li>
                                        <a href="{{ url('produk/' . $service->type . '/' . $service->slug ) }}">{{ $service->category }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('produk/' . $print->type ) }}">Print
                                <i class="fas fa-chevron-down u-s-m-l-9"></i>
                            </a>
                            <ul class="g-dropdown" style="width:200px">
                                @foreach ($nav_print as $print)
                                    <li>
                                        <a href="{{ url('produk/' . $service->type . '/' . $print->slug ) }}">{{ $print->category }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="#">Kontak Kami</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <nav>
                        <ul class="mid-nav g-nav">
                            <li class="u-d-none-lg">
                                <a href="{{ url('/') }}">
                                    <i class="ion ion-md-home u-c-brand"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Mid-Header /- -->
</header>
