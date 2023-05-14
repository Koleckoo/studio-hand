<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_inventory')->truncate();
        $products = [
            [
                'id' => 1,
                'quantity' => 10,
                "desc" => 'IN STOCK',
            ],
            [
                'id' => 2,
                'quantity' => 5,
                "desc" => 'IN STOCK',
            ],
            [
                'id' => 3,
                'quantity' => 5,
                "desc" => 'OUT OF STOCK',
            ],
           
        ];

        DB::table('product_inventory')->insert($products);
    }
}
 