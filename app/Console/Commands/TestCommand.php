<?php

namespace App\Console\Commands;

use App\Models\Cart\CartItem;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fodase';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $customer = Customer::find('f2e4ea7e-0aa2-4a27-aacf-7c686df81bbf');

        $activeCart = match($customer->hasActiveCart()) {
            true => $customer->activeCart(),
            false => $customer->carts()->create()
        };

        $cartItem = $activeCart->items()->create([
            'product_id' => 2,
            'amount' => 1
        ]);


        $activeCart->update([
            'active' => false
        ]);

        $activeCart->invoice()->firstOrCreate([
            'value' => $activeCart->getFinalPrice()
        ]);

        dd($activeCart->invoice);

    }
}
