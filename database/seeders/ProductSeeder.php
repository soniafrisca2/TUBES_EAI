<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            ['nama_barang' => 'Ban', 'harga_barang' => 75000,  'harga_ongkir' => null, 'harga_total' => 0],
            ['nama_barang' => 'Seal karet', 'harga_barang' => 50000,  'harga_ongkir' => null, 'harga_total' => 0],
            // Tambahkan data produk lainnya jika diperlukan
        ];

        foreach ($products as $productData) {
            $harga_barang = $productData['harga_barang'];
            $harga_ongkir = $productData['harga_ongkir'];
            $harga_total = $harga_barang + $harga_ongkir;

            $productData['harga_total'] = $harga_total;

            Product::create($productData);
        }
    }
}
