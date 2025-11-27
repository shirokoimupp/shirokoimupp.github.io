@extends('layout.app')

@section('title', 'Produk - PixelMerch')

{{-- panggil partial sidebar hanya di halaman ini --}}
@section('sidebar')
    @include('layout.sidebar')
@endsection

@section('content')
<div class="container my-4">
    <h2 class="mb-4">Produk</h2>

    <div class="row g-4 product-grid">
        <div class="col-md-4 product-item" data-category="kaos">
            <div class="product-card p-3 text-center">
                <img src="{{ asset('assets/terlaris1.jpeg') }}" alt="Kaos Pixel Art" class="product-image mb-3 mx-auto">
                <h5 class="mb-1">Kaos Pixel Art</h5>
                <p class="product-price mb-3">Rp150.000</p>
                <a class="btn btn-primary btn-sm w-auto px-3" href="{{ route('produk.show', ['id' => 1]) }}">Beli Sekarang</a>
            </div>
        </div>

        <div class="col-md-4 product-item" data-category="hoodie">
            <div class="product-card p-3 text-center">
                <img src="{{ asset('assets/terlaris2.webp') }}" alt="Hoodie Retro" class="product-image mb-3 mx-auto">
                <h5 class="mb-1">Hoodie Retro</h5>
                <p class="product-price mb-3">Rp300.000</p>
                <a class="btn btn-primary btn-sm w-auto px-3" href="{{ route('produk.show', ['id' => 2]) }}">Beli Sekarang</a>
            </div>
        </div>

        <div class="col-md-4 product-item" data-category="figure">
            <div class="product-card p-3 text-center">
                <img src="{{ asset('assets/terlaris3.avif') }}" alt="Action Figure Anime" class="product-image mb-3 mx-auto">
                <h5 class="mb-1">Action Figure Anime</h5>
                <p class="product-price mb-3">Rp250.000</p>
                <a class="btn btn-primary btn-sm w-auto px-3" href="{{ route('produk.show', ['id' => 3]) }}">Beli Sekarang</a>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const filterLinks = document.querySelectorAll('[data-filter]');
    const productItems = document.querySelectorAll('.product-item');

    filterLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            filterLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');

            const filter = this.getAttribute('data-filter');
            productItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>
@endsection