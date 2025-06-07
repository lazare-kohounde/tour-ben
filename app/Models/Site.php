<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'nomSit', 'description', 'prix', 'disponibilite','image'
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'idSit');
    }
    
}
