@extends('layout.app')
@section('title', 'Beranda - PixelMerch')
@section('content')
    <!-- Hero Section -->
    <section class="my-4">
        <div class="container">
            <div class="hero-card mx-auto">
                <div class="row align-items-center">
                    <div class="col-md-6 text-md-start text-center mb-4 mb-md-0">
                        <h1 class="hero-title">Selamat Datang di PixelMerch!</h1>
                        <p class="hero-subtitle">Toko satu atap untuk semua hal yang berhubungan dengan pixel dan merchandise.</p>
                        <a class="btn btn-primary btn-lg" href="{{ route('produk') }}">LIHAT KOLEKSI TERBARU</a>
                    </div>

                    <div class="col-md-6 text-center">
                        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('assets/caro1.jpg') }}" class="d-block w-100 carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/caro2.jpeg') }}" class="d-block w-100 carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/caro3.webp') }}" class="d-block w-100 carousel-image" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kategori Unggulan anjay -->
    <section class="my-4">
        <div class="container text-center">
            <h2 class="mb-4">Kategori Unggulan</h2>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="category-card p-4 h-100">
                        <img src="{{ asset('assets/kategori1.jpg') }}" alt="Category 1" class="category-image mb-3" width="200px">
                        <h3>Kaos</h3>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="category-card p-4 h-100">
                        <img src="{{ asset('assets/kategori2.jpeg') }}" alt="Category 2" class="category-image mb-3" width="200px">
                        <h3>Hoodie</h3>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="category-card p-4 h-100">
                        <img src="{{ asset('assets/kategori3.jpeg') }}" alt="Category 3" class="category-image mb-3" width="200px">
                        <h3>Aksesoris</h3>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="category-card p-4 h-100">
                        <img src="{{ asset('assets/kategori4.avif') }}" alt="Category 4" class="category-image mb-3" width="200px">
                        <h3>Action Figure</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Produk Terlaris anjay -->
    <section class="my-4">
        <div class="container text-center">
            <h2 class="mb-4">Produk Terlaris</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="product-card p-4 h-100 d-flex flex-column justify-content-between align-items-center text-center">
                        <img src="{{ asset('assets/terlaris1.jpeg') }}" alt="Product 1" class="product-image mb-3">
                        <div>
                            <h3 class="mb-2">Kaos Pixel Art</h3>
                            <p class="product-price mb-3">Rp150.000</p>
                        </div>
                        <a class="btn btn-primary btn-sm" href="{{ route('produk.show', 1) }}">Lihat Detail</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="product-card p-4 h-100 d-flex flex-column justify-content-between align-items-center text-center">
                        <img src="{{ asset('assets/terlaris2.webp') }}" alt="Product 2" class="product-image mb-3">
                        <div>
                            <h3 class="mb-2">Hoodie Retro</h3>
                            <p class="product-price mb-3">Rp300.000</p>
                        </div>
                        <a class="btn btn-primary btn-sm" href="{{ route('produk.show', 2) }}">Lihat Detail</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="product-card p-4 h-100 d-flex flex-column justify-content-between align-items-center text-center">
                        <img src="{{ asset('assets/terlaris3.avif') }}" alt="Product 3" class="product-image mb-3">
                        <div>
                            <h3 class="mb-2">Action Figure Anime</h3>
                            <p class="product-price mb-3">Rp250.000</p>
                        </div>
                        <a class="btn btn-primary btn-sm" href="{{ route('produk.show', 3) }}">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sekilas Tentang Kami anjay -->
    <section class="my-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 about-text">
                    <h2 class="mb-3">Sekilas Tentang Kami</h2>
                    <p class="mb-4">PixelMerch adalah toko online yang menyediakan berbagai merchandise berkualitas tinggi dengan desain pixel art yang unik. Kami berkomitmen untuk memberikan produk terbaik dan layanan pelanggan yang luar biasa.</p>
                    <a class="btn btn-primary btn-sm w-auto px-3" href="{{ route('produk.show', 1) }}">Lihat Detail</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('assets/tentang1.jpg') }}" alt="About Us" class="about-image mb-3 mx-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni Pelanggan anjay -->
    <section class="my-4">
        <div class="container text-center my-4">
            <h2 class="mb-4">Apa Kata Pelanggan Kami?</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card p-4 h-100">
                        <p class="testimonial-text">"Produk di PixelMerch selalu berkualitas tinggi dan desainnya keren banget! Saya sangat puas dengan pembelian saya."</p>
                        <h5 class="mt-3">- DaffaGantenks.</h5>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card p-4 h-100">
                        <p class="testimonial-text">"Layanan pelanggan di sini luar biasa! Mereka sangat responsif dan membantu saya dengan semua pertanyaan saya."</p>
                        <h5 class="mt-3">- DaffaSigmax.</h5>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card p-4 h-100">
                        <p class="testimonial-text">"Saya suka sekali koleksi aksesoris pixel art mereka. Setiap produk benar-benar unik dan menarik perhatian!"</p>
                        <h5 class="mt-3">- DaffaRizz.</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection