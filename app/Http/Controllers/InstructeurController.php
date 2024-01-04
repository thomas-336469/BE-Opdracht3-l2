<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructeur;

class InstructeurController extends Controller
{
    public function index()
    {
        $instructeurs = Instructeur::orderByDesc('aantal_sterren')->get();
        return view('Instructeurs.instructeur', ['instructeurs' => $instructeurs]);
    }
    public function edit(Instructeur $instructeur)
    {
        return view('instructeurs.edit', compact('instructeur'));
    }

    public function destroy(Instructeur $instructeur)
    {
        if ($instructeur->is_actief == 0) {
            return response()->json(['success' => false, 'message' => 'Instructeur is niet actief, kan niet verwijderd worden']);
        } else {
            $instructeur->delete();
            return response()->json(['success' => true, 'message' => 'Instructeur deleted successfully']);
        }
    }

    public function update(Instructeur $instructeur, Request $request)
    {
        $request->validate([
            'voornaam' => 'required',
            'tussenvoegsel' => 'nullable',
            'achternaam' => 'required',
            'mobiel' => 'required',
            'datum_in_dienst' => 'required|date',
            'aantal_sterren' => 'required',
            'is_actief' => 'required|boolean',
            'opmerkingen' => 'nullable',
        ]);

        $instructeur->update($request->all());

        return redirect()->route('instructeurs')
            ->with('success', 'Instructeur updated successfully');
    }
    protected $fillable = [
        'voornaam', 'tussenvoegsel', 'achternaam', 'mobiel', 'datum_in_dienst', 'aantal_sterren', 'is_actief', 'opmerkingen',
    ];
    public function toggleStatus(Instructeur $instructeur)
    {
        // Toggle the "Is Actief" status
        $instructeur->update([
            'is_actief' => !$instructeur->is_actief,
        ]);

        // You can return a JSON response to update the client-side UI
        return response()->json([
            'is_actief' => $instructeur->fresh()->is_actief,
        ]);
    }
}
