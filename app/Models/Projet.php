<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Projet extends Model
{
    use HasFactory;
    protected $fillable = [
        'codeProjet',
        'nomProjet',
        'dateLancement',
        'duree'
    ];

    public function localite():BelongsTo
    {
        return $this->belongsTo(Localite::class,'localite_id');
    }
}
