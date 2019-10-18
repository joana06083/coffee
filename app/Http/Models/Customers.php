<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    //
    
    protected $table = "customers";
    protected $primaryKey = 'cust_id';

    function customers() {
        return $this->hasMany(Customers::class, 'cust_id');
    }

}
