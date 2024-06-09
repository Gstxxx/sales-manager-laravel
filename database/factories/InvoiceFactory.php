<?php

namespace Database\Factories;

use App\Models\Cart\Cart;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class InvoiceFactory extends Factory
{
    protected $model = Invoice::class;

    public function definition()
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'value' => $this->faker->randomNumber(),
            'receipt_url' => $this->faker->url(),

            'cart_id' => Cart::factory(),
        ];
    }
}
