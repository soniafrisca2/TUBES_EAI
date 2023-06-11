<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            ['name' => 'Ban', 'price' => 75000],
            ['name' => 'Seal karet', 'price' => 50000],
            // Add more product data as needed
        ];

        Product::insert($products);
    }
}
