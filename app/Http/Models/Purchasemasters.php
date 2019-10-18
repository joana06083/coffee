<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Purchasemasters extends Model
{
    //
    protected $table = "purchasemasters";
    protected $primaryKey = 'pur_id';

    function purchasemasters() {
        return $this->hasMany(Purchasemasters::class, 'pur_id');
    }
}
