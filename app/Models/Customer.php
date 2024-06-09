<?php

namespace App\Models;

use App\Models\Cart\Cart;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'phone_number'
    ];

    public function carts(): HasMany
    {
        return $this->hasMany(Cart::class);
    }

    public function hasActiveCart(): bool
    {
        return $this->carts()
            ->where('active', true)
            ->exists();
    }

    public function activeCart(): HasOne|Cart
    {
        return $this->hasOne(Cart::class)
            ->where('active', false)
            ->orderByDesc('created_at')
            ->first();
    }
}
