<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Suivi extends Model
{
    use HasFactory;
    protected $fillable = [
        'numSuivi',
        'dateSuivi',
        'pourcentage',
        
    ];

    public function localite():BelongsTo
    {
        return $this->belongsTo(Projet::class,'projet_id');
    }
}
