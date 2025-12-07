<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'COCA COLA',
            'min_stock' => 5,
        ]);
        Product::create([
            'name' => 'FARINHA DE TRIGO',
            'min_stock' => 5,
        ]);
        Product::create([
            'name' => 'PEPSI',
            'min_stock' => 5,
        ]);
    }
}
