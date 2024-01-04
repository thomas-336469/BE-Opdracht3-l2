<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    protected $fillable = [
        'rijschool',
        'stad',
        'rijbewijs_categorie',
        'datum',
        'uitslag',
    ];

    // You can add any additional model configuration, relationships, or methods here
}
