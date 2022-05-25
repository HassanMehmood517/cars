<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    // A car model belongs to a a car
    public function car(){
        return $this->belongsTo(Car::class);
    }
}
