<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoertuigInstructeur extends Model
{

    public function voertuig()
    {
        return $this->belongsTo(Voertuig::class, 'voertuig_id');
    }
}
