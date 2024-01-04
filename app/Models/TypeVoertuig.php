<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeVoertuig extends Model
{
    protected $table = 'type_voertuigs';
    protected $fillable = ['type_voertuig', 'rijbewijscategorie', 'is_actief', 'opmerkingen'];
}
