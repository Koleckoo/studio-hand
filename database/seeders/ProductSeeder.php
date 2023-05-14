<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product')->truncate();
        $products = [
            [
                'id' => 1,
                'name' => 'Baňatý kalíšek s perletí modrý',
                "desc" => 'none',
                'price' => 450,
                'image_path' => 'none',
                'product_category_id' => 1,
                'product_inventory_id' => 1,
                'discount_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Baňatý kalíšek s perletí bílý',
                "desc" => 'none',
                'price' => 450,
                'image_path' => 'none',
                'product_category_id' => 1,
                'product_inventory_id' => 1,
                'discount_id' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Baňatý kalíšek s perletí červený',
                "desc" => 'none',
                'price' => 450,
                'image_path' => 'none',
                'product_category_id' => 1,
                'product_inventory_id' => 1,
                'discount_id' => 1,
            ],
        ];

        DB::table('product')->insert($products);
    }
}
