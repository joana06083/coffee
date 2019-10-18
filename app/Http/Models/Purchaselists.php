<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Purchaselists extends Model
{
    //
    protected $table = "purchaselists";
    protected $primaryKey = 'pur_id';

    function purchaselists() {
        return $this->hasMany(Purchaselists::class, 'pur_id');
    }
}
