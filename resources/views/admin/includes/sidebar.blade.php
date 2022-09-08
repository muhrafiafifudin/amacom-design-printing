<div class="sidebar">
    <div class="sidebar-background"></div>
    <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('admin/img/profile.jpg') }}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::guard('admin')->user()->name }}
                            <span class="user-level">Administrator</span>
                        </span>
                    </a>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Pelanggan</h4>
                </li>
                <li class="nav-item {{ request()->is('admin/pelanggan') ? 'active' : '' }}">
                    <a href="{{ route('admin.pelanggan.index') }}">
                        <i class="fas fa-users"></i>
                        <p>Pelanggan</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Produk</h4>
                </li>
                <li class="nav-item {{ request()->is('admin/kategori') ? 'active' : '' }}">
                    <a href="{{ route('admin.kategori.index') }}">
                        <i class="fas fa-cubes"></i>
                        <p>Kategori</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('admin/produk') ? 'active' : '' }}">
                    <a href="{{ route('admin.produk.index') }}">
                        <i class="fas fa-cube"></i>
                        <p>Produk</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Transaksi</h4>
                </li>
                <li class="nav-item {{ request()->is('admin/transaksi') ? 'active' : '' }}">
                    <a href="{{ route('admin.transaksi.index') }}">
                        <i class="far fa-money-bill-alt"></i>
                        <p>Transaksi</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Laporan</h4>
                </li>
                <li class="nav-item {{ request()->is('admin/report-transaction') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fas fa-clipboard-check"></i>
                        <p>Laporan Transaksi</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
