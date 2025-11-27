@extends('layout.app')

@section('title', $product['name'] . ' - PixelMerch')

@section('content')
<section class="my-4">
    <div class="container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb bg-transparent p-0">
                <li class="breadcrumb-item"><a href="{{ route('beranda') }}" class="text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ route('produk') }}" class="text-decoration-none">Produk</a></li>
                <li class="breadcrumb-item active">{{ $product['name'] }}</li>
            </ol>
        </nav>

        <div class="row g-4">
            <!-- Product Image -->
            <div class="col-md-5">
                <div class="product-detail-image bg-dark p-4 rounded">
                    <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" class="img-fluid rounded">
                </div>
            </div>

            <!-- Product Info -->
            <div class="col-md-7">
                <div class="product-detail-info">
                    <div class="category-badge mb-2">
                        <span class="badge bg-primary">{{ $product['category'] }}</span>
                    </div>

                    <h1 class="product-detail-title mb-2">{{ $product['name'] }}</h1>

                    <div class="product-detail-price mb-3">
                        <span class="price-label">Harga</span>
                        <h2 class="price-value">Rp{{ number_format($product['price'], 0, ',', '.') }}</h2>
                    </div>

                    <hr class="border-secondary my-3">

                    <div class="product-description mb-4">
                        <h5 class="mb-2">Deskripsi Produk</h5>
                        <p class="text-muted">{{ $product['description'] }}</p>
                    </div>

                    <div class="product-action mb-4">
                        <a class="btn btn-primary btn-lg w-100 mb-2" 
                           href="https://wa.me/6285645829795?text=Saya%20ingin%20membeli%20{{ urlencode($product['name']) }}%20-%20Rp{{ number_format($product['price'], 0, ',', '.') }}"
                           target="_blank">
                            <i class="bi bi-whatsapp me-2"></i> Beli via WhatsApp
                        </a>
                        <button class="btn btn-outline-primary btn-lg w-100">
                            <i class="bi bi-cart-plus me-2"></i> Tambah ke Keranjang
                        </button>
                    </div>

                    <hr class="border-secondary my-3">

                    <div class="product-share">
                        <p class="small text-muted mb-2">Bagikan produk ini:</p>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-sm btn-outline-light"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-light"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-light"><i class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Details Section -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="product-details-tabs">
                    <ul class="nav nav-tabs mb-4" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="tips-tab" data-bs-toggle="tab" data-bs-target="#tips" type="button" role="tab">💡 Tips Perawatan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab">ℹ️ Informasi Tambahan</button>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tips" role="tabpanel">
                            <div class="info-card p-4 rounded">
                                <p>{{ $product['tips'] }}</p>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="info" role="tabpanel">
                            <div class="info-card p-4 rounded">
                                <ul class="list-unstyled">
                                    @foreach($product['additional_info'] as $info)
                                        <li class="mb-2">
                                            <i class="bi bi-check-circle-fill" style="color: #9d4edd;"></i>
                                            <span class="ms-2">{{ $info }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class="row mt-4 mb-4">
            <div class="col-12">
                <a href="{{ route('produk') }}" class="text-decoration-none">← Kembali ke Beranda</a>
            </div>
        </div>
    </div>
</section>
@endsection