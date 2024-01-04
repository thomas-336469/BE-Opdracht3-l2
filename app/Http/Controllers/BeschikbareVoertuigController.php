<?php

namespace App\Http\Controllers;

use App\Models\Voertuig;
use Illuminate\Http\Request;

class BeschikbareVoertuigController extends Controller
{
    public function index()
    {
        // Retrieve voertuigen that are not linked to an instructeur
        $beschikbareVoertuigen = Voertuig::whereDoesntHave('voertuigInstructeurs')->get();

        return view('voertuigen.beschrikbareVoertuigen', compact('beschikbareVoertuigen'));
    }
}
