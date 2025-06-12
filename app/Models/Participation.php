<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Participation extends Model
{
    protected $table = 'participations';

    protected $fillable = [
        'evenement_id',
        'idTouriste',
        'statutPart',
        'datePart',
        'motif',
        'commentaire',
    ];

    protected $dates = [
        'datePart',
        'created_at',
        'updated_at',
    ];

    /**
     * La participation appartient à un événement.
     */
    public function evenement(): BelongsTo
    {
        return $this->belongsTo(Evenement::class, 'evenement_id');
    }

    /**
     * La participation appartient à un touriste (utilisateur).
     */
    public function touriste(): BelongsTo
    {
        return $this->belongsTo(User::class, 'idTouriste');
    }
}
