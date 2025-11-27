<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::view('/', 'beranda')->name('beranda');
Route::view('/tentang', 'tentang')->name('tentang');
Route::view('/produk', 'produk')->name('produk');
Route::view('/kontak', 'kontak')->name('kontak');
Route::get('/produk/{id}', [ProductController::class, 'show'])->name('produk.show');