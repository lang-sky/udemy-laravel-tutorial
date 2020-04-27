<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Buyer extends User
{
    public function transactions ()
    {
        return $this->hasMany(Transaction::class);
    }
}
