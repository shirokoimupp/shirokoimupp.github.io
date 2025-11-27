<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Data dummy produk (nanti bisa ganti pakai database)
    private $products = [
        1 => [
            'id' => 1,
            'name' => 'Kaos Pixel Art',
            'category' => 'Kaos',
            'price' => 150000,
            'image' => 'assets/terlaris1.jpeg',
            'description' => 'Kaos Pixel Art adalah produk unggulan kami dengan desain pixel art yang menarik dan berkualitas tinggi. Terbuat dari bahan katun 100% yang nyaman dipakai sepanjang hari.',
            'tips' => 'Letakkan di tempat yang terlindung dari sinar matahari langsung agar warna tetap awet. Hindari mesin cuci dengan suhu tinggi. Berikan pelembut pakaian 2-3 tetes untuk hasil optimal.',
            'additional_info' => [
                'Pengiriman dilakukan melalui kurir terpercaya',
                'Harga buku termasuk ongkir gratis ke seluruh nusantara',
                'Pembayaran via Transfer Bank atau COD (Pengambilan lokal)',
                'Pengiriman maksimal 3 hari kerja setelah pembayaran'
            ]
        ],
        2 => [
            'id' => 2,
            'name' => 'Hoodie Retro',
            'category' => 'Hoodie',
            'price' => 300000,
            'image' => 'assets/terlaris2.webp',
            'description' => 'Hoodie Retro dengan desain gaming 80s yang iconic. Bahan premium fleece tebal dengan jahitan yang presisi untuk kenyamanan maksimal.',
            'tips' => 'Cuci dengan air dingin untuk menjaga kualitas warna. Hindari penggunaan pemutih. Jangan peras terlalu kuat saat mencuci.',
            'additional_info' => [
                'Pengiriman dilakukan melalui kurir terpercaya',
                'Harga sudah termasuk ongkir gratis ke seluruh nusantara',
                'Pembayaran via Transfer Bank atau COD (Pengambilan lokal)',
                'Pengiriman maksimal 3 hari kerja setelah pembayaran'
            ]
        ],
        3 => [
            'id' => 3,
            'name' => 'Action Figure Anime',
            'category' => 'Action Figure',
            'price' => 250000,
            'image' => 'assets/terlaris3.avif',
            'description' => 'Action Figure Anime dengan detail yang sangat halus dan presisi. Material PVC berkualitas tinggi dengan painting yang profesional.',
            'tips' => 'Letakkan di tempat yang terlindung dari debu dan kelembaban tinggi. Hindari paparan sinar matahari langsung untuk mencegah perubahan warna.',
            'additional_info' => [
                'Pengiriman dilakukan melalui kurir terpercaya',
                'Harga sudah termasuk ongkir gratis ke seluruh nusantara',
                'Pembayaran via Transfer Bank atau COD (Pengambilan lokal)',
                'Pengiriman maksimal 3 hari kerja setelah pembayaran'
            ]
        ]
    ];

    public function show($id)
    {
        $product = $this->products[$id] ?? null;

        if (!$product) {
            abort(404, 'Produk tidak ditemukan');
        }

        return view('produk-detail', compact('product'));
    }
}
