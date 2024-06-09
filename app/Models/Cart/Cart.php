<?php

namespace App\Models\Cart;

use App\Models\Customer;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cart extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'customer_id',
        'active'
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(CartItem::class, 'cart_id', 'id');
    }

    public function invoice(): HasOne
    {
        return $this->hasOne(Invoice::class);
    }

    public function getFinalPrice(): int
    {
        $finalPrice = 0;

        /** @var CartItem $item */
        foreach($this->items as $item) {

            $finalPrice += $item->product->price * $item->amount;
        }

        return $finalPrice;
    }
}
