<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table = "products";
    protected $primaryKey = 'pro_id';

    function products() {
        return $this->hasMany(Products::class, 'pro_id');
    }
}
