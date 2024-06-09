<?php

namespace Database\Factories;

use App\Models\Cart\Cart;
use App\Models\Cart\CartItem;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CartItemFactory extends Factory
{
    protected $model = CartItem::class;

    public function definition()
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'cart_id' => Cart::factory(),
            'product_id' => Product::factory(),
        ];
    }
}
