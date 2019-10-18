<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Ordermaters extends Model
{
    //
    protected $table = "ordermaters";
    protected $primaryKey = 'ordermater_id';

    function ordermaters() {
        return $this->hasMany(Ordermaters::class, 'ordermater_id');
    }
}
