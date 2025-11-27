<footer class="site-footer text-light pt-5 pb-3">
    <div class="container">
        <div class="row gy-4">
            <div class="col-md-4">
                <div class="d-flex align-items-center mb-2">
                    <img src="{{ asset('assets/logo1.jpg') }}" alt="PixelMerch Logo" width="48" height="48" class="rounded me-2">
                    <span class="h6 mb-0 text-white fw-bold">PixelMerch</span>
                </div>
                <p class="text-muted small">Toko online untuk berbagai merchandise dengan desain pixel art. Produk berkualitas dan layanan cepat.</p>
            </div>

            <div class="col-md-2">
                <h6 class="text-white">Navigasi</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('beranda') }}" class="text-muted footer-link">Beranda</a></li>
                    <li><a href="{{ route('tentang') }}" class="text-muted footer-link">Tentang</a></li>
                    <li><a href="{{ route('produk') }}" class="text-muted footer-link">Produk</a></li>
                    <li><a href="{{ route('kontak') }}" class="text-muted footer-link">Kontak</a></li>
                </ul>
            </div>

            <div class="col-md-3">
                <h6 class="text-white">Layanan</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-muted footer-link">Cara Pembelian</a></li>
                    <li><a href="#" class="text-muted footer-link">Pengiriman</a></li>
                    <li><a href="#" class="text-muted footer-link">Pengembalian</a></li>
                    <li><a href="#" class="text-muted footer-link">Syarat & Ketentuan</a></li>
                </ul>
            </div>

            <div class="col-md-3">
                <h6 class="text-white">Ikuti Kami</h6>
                <div class="d-flex gap-2">
                    <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="bi bi-youtube"></i></a>
                </div>
                <p class="text-muted small mt-3">Butuh bantuan? Hubungi kami di <a href="mailto:hello@pixelmerch.id" class="text-decoration-none">hello@pixelmerch.id</a></p>
            </div>
        </div>

        <hr class="mt-4 border-secondary">

        <div class="row">
            <div class="col-12 text-center small">
                &copy; {{ date('Y') }} PixelMerch. All rights reserved.
            </div>
        </div>
    </div>
</footer>