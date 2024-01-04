<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OverzichtController extends Controller
{
    public function index()
    {
        return view('Voertuigen.overzichtVoertuigen');
    }
}
