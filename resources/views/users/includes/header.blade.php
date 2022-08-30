<header>
    <!-- Top-Header -->
    <div class="full-layer-outer-header">
        <div class="container clearfix">
            <nav>
                <ul class="primary-nav g-nav">
                    <li>
                        <a href="tel:+111444989">
                            <i class="fas fa-phone u-c-brand u-s-m-r-9"></i>
                            Telephone:+111-444-989</a>
                    </li>
                    <li>
                        <a href="mailto:contact@domain.com">
                            <i class="fas fa-envelope u-c-brand u-s-m-r-9"></i>
                            E-mail: contact@domain.com
                        </a>
                    </li>
                </ul>
            </nav>
            <nav>
                <ul class="secondary-nav g-nav">
                    <li>
                        <a>My Account
                            <i class="fas fa-chevron-down u-s-m-l-9"></i>
                        </a>
                        <ul class="g-dropdown" style="width:200px">
                            <li>
                                <a href="cart.html">
                                    <i class="fas fa-cog u-s-m-r-9"></i>
                                    My Cart</a>
                            </li>
                            <li>
                                <a href="wishlist.html">
                                    <i class="far fa-heart u-s-m-r-9"></i>
                                    My Wishlist</a>
                            </li>
                            <li>
                                <a href="checkout.html">
                                    <i class="far fa-check-circle u-s-m-r-9"></i>
                                    Checkout</a>
                            </li>
                            <li>
                                <a href="{{ route('login') }}">
                                    <i class="fas fa-sign-in-alt u-s-m-r-9"></i>
                                    Login / Signup</a>
                            </li>
                        </ul>
                    </li>
                </ul>
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
                        <a href="home.html">
                            <h2>AMACOM</h2>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <form class="form-searchbox">
                        <label class="sr-only" for="search-landscape">Search</label>
                        <input id="search-landscape" type="text" class="text-field" placeholder="Search everything">
                        <button id="btn-search" type="submit" class="button button-primary fas fa-search"></button>
                    </form>
                </div>
                <div class="col-lg-2">
                    <nav>
                        <ul class="mid-nav g-nav">
                            <li class="u-d-none-lg">
                                <a href="home.html">
                                    <i class="ion ion-md-home u-c-brand"></i>
                                </a>
                            </li>
                            <li class="u-d-none-lg">
                                <a href="wishlist.html">
                                    <i class="far fa-heart"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Mid-Header /- -->
    <!-- Responsive-Buttons -->
    <div class="fixed-responsive-container">
        <div class="fixed-responsive-wrapper">
            <button type="button" class="button fas fa-search" id="responsive-search"></button>
        </div>
        <div class="fixed-responsive-wrapper">
            <a href="wishlist.html">
                <i class="far fa-heart"></i>
                <span class="fixed-item-counter">4</span>
            </a>
        </div>
    </div>
    <!-- Responsive-Buttons /- -->
    <!-- Bottom-Header -->
    <div class="full-layer-bottom-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
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
            </div>
        </div>
    </div>
    <!-- Bottom-Header /- -->
</header>
