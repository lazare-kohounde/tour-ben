<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    // Clé primaire personnalisée
    protected $primaryKey = 'idRes';

    // Champs modifiables en masse
    protected $fillable = [
        'idTouriste',
        'statutRes',
        'dateRes',
        'motif',
        'commentaire',
        'evenement_id',  // Ajouté pour correspondre à la table
        // ajoute 'site_id' si ta table contient ce champ
    ];

    // Relations

    public function touriste()
    {
        return $this->belongsTo(User::class, 'idTouriste');
    }

    public function site()
    {
        return $this->belongsTo(Site::class);
    }

    
}
