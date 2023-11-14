<?php

namespace App\Http\Controllers;

use App\Models\Anneeuniversitaire;
use App\Models\Cycle;
use App\Models\Enseignant;
use App\Models\Filiere;
use App\Models\Matiere;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function enseignant()
    {

        $enseignant = Enseignant::all();
        $filiere = Filiere::all();
        $cycle = Cycle::all();
        $matiere = Matiere::all();
        $anneeuniversitaire = Anneeuniversitaire::all();
        return view('forme.enseignant', [
            'enseignant' => $enseignant,
            'filiere' => $filiere,
            'cycle' => $cycle,
            'matiere' => $matiere,
            'anneeuniversitaire' => $anneeuniversitaire,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'telephone' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'filiere' => 'required|exists:filieres,id',
            'cycle' => 'required|exists:cycles,id',
            'matiere' => 'required|exists:matieres,id',
            'adhesion' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'anneeuniversitaire' => 'required|exists:anneeuniversitaires,id',
        ]);

        $enseignant = new enseignant();
        $enseignant->nom = $request->input('nom');
        $enseignant->prenom = $request->input('prenom');
        $enseignant->telephone = $request->input('telephone');
        $enseignant->email = $request->input('email');
        $enseignant->password = $request->input('password');
        $enseignant->filiere = $request->input('filiere');
        $enseignant->cycle = $request->input('cycle');
        $enseignant->matiere = $request->input('matiere');
        $enseignant->adhesion = $request->input('adhesion');
        $enseignant->role = $request->input('role');
        $enseignant->anneeuniversitaire = $request->input('anneeuniversitaire');

        $enseignant->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
