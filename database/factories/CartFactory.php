<?php

namespace Database\Factories;

use App\Models\Cart\Cart;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CartFactory extends Factory
{
    protected $model = Cart::class;

    public function definition()
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'active' => false,

            'customer_id' => Customer::factory(),
        ];
    }
}
