<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_category')->truncate();

        $product_categories = [
            [
                'id' => 1,
                'name' => 'Baňaté kalíšky 280 ml',
                'desc' => 'Baňatý kalíšek ze světlé kameniny s objemem 280 ml.'
            ],
            [
                'id' => 2,
                'name' => 'Baňaté kalíšky 70 ml',
                'desc' => 'Baňatý kalíšek ze světlé kameniny s objemem 70 ml.'
            ],
            [
                'id' => 3,
                'name' => 'Kalíšky válce 140 ml',
                'desc' => 'Kalíšek válcového tvaru ze světlé kameniny s objemem 140 ml.'
            ],
            [
                'id' => 4,
                'name' => 'Retro kalíšky',
                'desc' => 'Retro kalíšek ze světlé kameniny s objemem 150 ml.'
            ],
            [
                'id' => 5,
                'name' => 'Kalíšky 370 ml',
                'desc' => 'Kalíšek válcového tvaru ze světlé kameniny s objemem 370 ml.'
            ],
            [
                'id' => 6,
                'name' => 'Aromalampy',
                'desc' => 'Aromalampy ze světlé kameniny'
            ]
            ];

        DB::table('product_category')->insert($product_categories);
    }
}
