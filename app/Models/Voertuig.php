<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TypeVoertuig;
use App\Models\VoertuigInstructeur;

class Voertuig extends Model
{
    use HasFactory;

    protected $fillable = [
        'kenteken',
        'type',
        'bouwjaar',
        'brandstof',
        'type_voertuig_id',
        'is_actief',
        'opmerkingen',
    ];

    public function typeVoertuig()
    {
        return $this->belongsTo(TypeVoertuig::class, 'type_voertuig_id');
    }
    public function voertuigInstructeurs()
    {
        return $this->hasMany(VoertuigInstructeur::class, 'voertuig_id');
    }
}
