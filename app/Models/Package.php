<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory; 

    public function truckdrivers(){
        return $this->belongsTo('App\Models\TruckDriver');
    }
}
