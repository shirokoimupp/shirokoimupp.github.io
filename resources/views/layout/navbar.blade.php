<nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('assets/logo1.jpg') }}" alt="PixelMerch Logo" width="40" height="40" class="d-inline-block align-text-top rounded">
            <span class="ms-2 fw-bold">PixelMerch</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('beranda') ? 'active' : '' }}" href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('tentang') ? 'active' : '' }}" href="{{ route('tentang') }}">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('produk*') ? 'active' : '' }}" href="{{ route('produk') }}">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('kontak') ? 'active' : '' }}" href="{{ route('kontak') }}">Kontak</a>
                </li>

                <!-- small cart icon -->
                <li class="nav-item ms-2">
                    <a class="nav-link position-relative" href="#">
                        <i class="bi bi-cart4" style="font-size:1.1rem;"></i>
                        <span class="badge bg-danger position-absolute top-0 start-100 translate-middle p-1 rounded-pill">3</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>