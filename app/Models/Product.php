<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const AVAILABLE_PRODUCT = 'availalbe';
    const UNAVAILABLE_PRODUCT = 'unavailalbe';

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'status',
        'image',
        'seller_id',
    ];

    public function isAvailalbe ()
    {
        return $this->status == Product::AVAILABLE_PRODUCT;
    }

    public function seller ()
    {
        return $this->belongsTo(Seller::class);
    }

    public function transactions ()
    {
        return $this->hasMany(Transaction::class);
    }

    public function categories ()
    {
        return $this->belongsToMany(Category::class);
    }
}
