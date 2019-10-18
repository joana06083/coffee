<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    //
    protected $table = 'employees';    
    protected $primaryKey = 'em_id';
   
    function employees() {
        return $this->hasMany(Employees::class, 'em_id');
    }
}
