<?php

namespace App\Models;

use App\Models\Cart\Cart;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'cart_id',
        'value',
        'receipt_url',
        'paid'
    ];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

}
