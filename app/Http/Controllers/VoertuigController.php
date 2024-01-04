<?php

namespace App\Http\Controllers;

use App\Models\Voertuig;
use Illuminate\Http\Request;

class VoertuigController extends Controller
{
    public function index()
    {
        $voertuigs = Voertuig::with('typeVoertuig')->get();

        return view('voertuigen.overzichtVoertuigen', compact('voertuigs'));
    }

    public function edit($id)
    {
        $voertuig = Voertuig::with('typeVoertuig')->find($id);

        return view('voertuigen.edit', compact('voertuig'));
    }

    public function update(Request $request, $id)
    {
        $voertuig = Voertuig::findOrFail($id);

        // Validate the request data as needed
        $request->validate([
            'kenteken' => 'required|string|max:255',
            'bouwjaar' => 'required|date',
            'brandstof' => 'required|string|max:255',
            'type_voertuig_id' => 'required|exists:type_voertuigs,id',
            'is_actief' => 'boolean',
            'opmerkingen' => 'nullable|string',
        ]);

        $voertuig->update($request->all());


        return redirect()->route('voertuigoverzicht');
    }
}
