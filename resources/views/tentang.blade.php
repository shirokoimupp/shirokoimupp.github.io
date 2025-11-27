@extends('layout.app')
@section('title', 'Tentang - PixelMerch')
@section('content')

<!-- Tentang Kami anjay -->
<section class="my-4">
    <div class="container">
        <div class="about-card shadow-sm p-4 mb-4 rounded">
            <div class="row align-items-center">
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <img src="{{ asset('assets/tentang2.jpg') }}" alt="Tentang Kami" class="about-image mb-3 mx-auto">
                </div>

                <div class="col-md-6 text-md-start text-center about-text">
                    <h2 class="mb-3">Tentang PixelMerch</h2>
                    <p class="mb-4">PixelMerch adalah toko online yang didedikasikan untuk menyediakan merchandise berkualitas tinggi dengan desain pixel art yang unik dan menarik. Kami percaya bahwa seni pixel memiliki daya tarik tersendiri dan kami berkomitmen untuk menghadirkan produk-produk terbaik bagi para penggemar pixel di seluruh dunia.</p>
                </div>
            </div>
        </div>

        <!-- Kenapa Kami Ada anjay -->
        <div class="about-card shadow-sm p-4 mb-4 rounded">
            <h2 class="text-center mb-4">Kenapa PixelMerch Ada</h2>
            <p>PixelMerch lahir dari kecintaan yang mendalam terhadap era keemasan gaming 8-bit dan 16-bit, di mana setiap kotak kecil (pixel) memiliki kekuatan untuk menciptakan dunia yang luas dan penuh imajinasi. Kami, para pendiri, percaya bahwa pixel art lebih dari sekadar nostalgia; ia adalah bentuk seni yang timeless, penuh detail, dan memiliki karakter yang kuat.</p>
            <p>Visi kami sederhana: mengambil seni digital yang unik ini dan mengubahnya menjadi merchandise nyata dan berkualitas tinggi yang bisa Anda sentuh, pakai, dan bagikan. Kami di sini untuk merayakan kreativitas pixel art dan membagikan pesona kesederhanaannya kepada para penggemar di seluruh dunia. Selamat datang di dunia di mana nostalgia bertemu dengan desain modern.</p>
        </div>
    </div>
</section>

<!-- Keunggulan Web ini anjay -->
<section class="my-4">
    <div class="container text-center">
        <h2 class="mb-4">Kenapa Memilih Kami?</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card p-4 h-100">
                    <div class="feature-icon mb-3">
                        <i class="bi bi-star-fill" style="font-size: 2.5rem; color: #9d4edd;"></i>
                    </div>
                    <h3 class="mb-2">Kualitas Terbaik</h3>
                    <p>Kami hanya menyediakan produk dengan kualitas terbaik untuk pelanggan kami.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card p-4 h-100">
                    <div class="feature-icon mb-3">
                        <i class="bi bi-palette-fill" style="font-size: 2.5rem; color: #9d4edd;"></i>
                    </div>
                    <h3 class="mb-2">Desain Unik</h3>
                    <p>Setiap produk dirancang dengan desain yang unik dan menarik.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card p-4 h-100">
                    <div class="feature-icon mb-3">
                        <i class="bi bi-headset" style="font-size: 2.5rem; color: #9d4edd;"></i>
                    </div>
                    <h3 class="mb-2">Layanan Pelanggan</h3>
                    <p>Tim layanan pelanggan kami siap membantu Anda kapan saja.</p>
                </div>
            </div>
        </div>
        <a class="btn btn-primary mt-4" href="{{ route('produk') }}">Lihat Produk Kami</a>
    </div>
</section>
@endsection