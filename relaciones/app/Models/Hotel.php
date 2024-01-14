<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'address', 
        'description', 
        'price', 
        'rating'
    ];

    // el hotel pertenece al viaje
    public function trip() {
        return $this->belongsTo(Trip::class);
    }
}
