<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomEve',
        'description',
        'prix',
        'disponibilite',
        'image',
    ];
    
    

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'id');
    }
  
}

