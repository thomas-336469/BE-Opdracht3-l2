<?php

namespace App\Http\Controllers;

use App\Models\Examen;
use Illuminate\Http\Request;

class ExamenController extends Controller
{
    public function index()
    {
        // Fetch all exams from the database, sorted by rijbewijs_categorie
        $exams = Examen::orderBy('rijbewijs_categorie')->get();

        // Pass the exams data to the view
        return view('Examens.overzicht-examens', compact('exams'));
    }
}
