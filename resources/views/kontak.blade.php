@extends('layout.app')
@section('title', 'Kontak - PixelMerch')
@section('content')

<!-- Bagian Kontak anjay -->
<section class="my-4">
    <div class="container">
        <h2 class="text-center mb-4">Hubungi Kami</h2>

        <div class="row g-4">
            <!-- Form Kontak -->
            <div class="col-md-7">
                <div class="contact-card p-4 rounded">
                    <h3 class="mb-3">Formulir Kontak</h3>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control form-control-dark" id="name" placeholder="Masukkan nama lengkap Anda">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control form-control-dark" id="email" placeholder="Masukkan email Anda">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subjek</label>
                            <input type="text" class="form-control form-control-dark" id="subject" placeholder="Subjek pesan Anda">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea class="form-control form-control-dark" id="message" rows="5" placeholder="Tulis pesan Anda di sini"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
                    </form>
                </div>
            </div>

            <!-- Informasi Kontak -->
            <div class="col-md-5">
                <div class="contact-card p-4 rounded">
                    <h3 class="mb-3">Informasi Kontak</h3>
                    <p class="text-muted mb-4">Jika Anda memiliki pertanyaan atau membutuhkan bantuan, jangan ragu untuk menghubungi kami:</p>

                    <div class="contact-info mb-3">
                        <div class="d-flex gap-3 mb-3">
                            <i class="bi bi-geo-alt-fill" style="color: #9d4edd; font-size: 1.3rem; flex-shrink: 0;"></i>
                            <div>
                                <strong>Alamat</strong>
                                <p class="text-muted small">Jl. Contoh No.123, Kota Contoh, Negara Contoh</p>
                            </div>
                        </div>

                        <div class="d-flex gap-3 mb-3">
                            <i class="bi bi-clock-fill" style="color: #9d4edd; font-size: 1.3rem; flex-shrink: 0;"></i>
                            <div>
                                <strong>Jam Operasional</strong>
                                <p class="text-muted small">Senin - Jumat, 09:00 - 17:00 WIB</p>
                            </div>
                        </div>

                        <div class="d-flex gap-3 mb-3">
                            <i class="bi bi-telephone-fill" style="color: #9d4edd; font-size: 1.3rem; flex-shrink: 0;"></i>
                            <div>
                                <strong>Telepon</strong>
                                <p class="text-muted small"><a href="tel:+6212345678900" class="text-decoration-none" style="color: #9d4edd;">+62 123 4567 890</a></p>
                            </div>
                        </div>

                        <div class="d-flex gap-3 mb-3">
                            <i class="bi bi-envelope-fill" style="color: #9d4edd; font-size: 1.3rem; flex-shrink: 0;"></i>
                            <div>
                                <strong>Email</strong>
                                <p class="text-muted small"><a href="mailto:info@pixelmerch.com" class="text-decoration-none" style="color: #9d4edd;">info@pixelmerch.com</a></p>
                            </div>
                        </div>
                    </div>

                    <hr class="border-secondary">

                    <h6 class="mb-3">Ikuti Kami</h6>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lokasi di Maps anjay -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="contact-card p-4 rounded">
                    <h3 class="mb-3">Lokasi Kami</h3>
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1AP5rnLIzm2_kQt0MJPyKxZMdVzW9KV4&ehbc=2E312F" width="100%" height="450" style="border:0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection