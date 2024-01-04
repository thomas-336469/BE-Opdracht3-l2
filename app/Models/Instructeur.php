<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructeur extends Model
{
    use HasFactory;

    protected $fillable = [
        'voornaam',
        'tussenvoegsel',
        'achternaam',
        'mobiel',
        'datum_in_dienst',
        'aantal_sterren',
        'is_actief',
        'opmerkingen',
    ];

    protected $casts = [
        'is_actief' => 'boolean',
    ];
}
