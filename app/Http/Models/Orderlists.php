<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Orderlists extends Model
{
    //
    protected $table = "orderlists";
    protected $primaryKey = 'ordermater_id';

    function orderlists() {
        return $this->hasMany(Orderlists::class, 'ordermater_id');
    }
}
