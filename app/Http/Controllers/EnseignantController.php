<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnseignantRequest;
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
    public function store(StoreEnseignantRequest $request)
    {
        // dd($request->all());
        $inputs = $request->validated();
        Enseignant::create($inputs);
        return redirect()->back()->with('message', 'Inscription enseignant reussi 😉');
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
    public function destroy(Enseignant $enseignant)
    {
        $enseignant->delete();
        return redirect()->back()->with('success', 'Enseignant supprimer avec succes 😓');
    }
}
