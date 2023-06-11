<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Helpers\ApiFormatter;

class PriceController extends Controller
{
    public function checkPrice($id_produk, $qty, $id_customer)
    {
        $product = Product::find($id_produk);

        if (!$product) {
            return ApiFormatter::createApi(404, 'Produk tidak ditemukan');
        }

        $harga_barang = $product->price * $qty;
        $harga_ongkir = null;
        $harga_total = $harga_barang + $harga_ongkir;

        $data = [
            'id_produk' => $id_produk,
            'qty' => $qty,
            'id_customer' => $id_customer,
            'harga_barang' => $harga_barang,
            'harga_ongkir' => $harga_ongkir,
            'harga_total' => $harga_total
        ];

        return ApiFormatter::createApi(200, 'Sukses', $data);
    }
}

