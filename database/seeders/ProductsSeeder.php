<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Feijão',
                'price' => 7.80,
                'quantity' => 200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Arroz',
                'price' => 5.50,
                'quantity' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Macarrão',
                'price' => 3.35,
                'quantity' => 150,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
