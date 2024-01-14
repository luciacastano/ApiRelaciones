<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'description', 
        'name', 
        'price'
    ];

    // 1 viaje puede tener muchos hoteles, primera relación 1:N
    public function hotel() {
        return $this->hasMany(Hotel::class);
    }

    // 1 viaje puede tener muchos vehículos, segunda relación 1:N
    public function vehicle() {
        return $this->hasMany(Vehicle::class);
    }
}
