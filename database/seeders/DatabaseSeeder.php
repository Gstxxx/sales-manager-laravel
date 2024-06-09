<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Cafezin',
                'price' => 1000,
            ],
            [
                'name' => 'Monster 437ml',
                'price' => 1300,
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

        Customer::factory()->create(['id' => 'f2e4ea7e-0aa2-4a27-aacf-7c686df81bbf']);
    }
}
