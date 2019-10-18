<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    //
    protected $table = "suppliers";
    protected $primaryKey = 'sup_id';
    function suppliers() {
        return $this->hasMany(Suppliers::class, 'sup_id');
    }
}
