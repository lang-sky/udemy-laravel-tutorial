<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Seller extends User
{
    protected $fillable = [
        'quantity',
        'buyer_id',
        'product_id',
    ];

    public function buyer ()
    {
        return $this->belongsTo(Buyer::class);
    }

    public function product ()
    {
        return $this->belongsTo(Product::class);
    }
}
