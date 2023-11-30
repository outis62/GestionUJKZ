<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTuteurRequest;
use App\Http\Requests\UpdateTuteurRequest;
use App\Models\Tuteur;

class TuteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tuteur = Tuteur::all();
        return view('forme.tuteur.index', [
            'tuteur' => $tuteur,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forme.tuteur.create', [
            'tittle' => 'Formulaire inscription tuteurs.',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTuteurRequest $request)
    {
        $inputs = $request->validated();
        Tuteur::create($inputs);
        return redirect()->route('tuteur.create')->with('message', 'Tuteur enregistré avec succès 😉');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tuteur $tuteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tuteur $tuteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTuteurRequest $request, Tuteur $tuteur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tuteur $tuteur)
    {
        $tuteur->eleve()->delete();
        $tuteur->delete();

        return redirect()->route('tuteur.index')->with('success', 'Tuteur supprimer avec succès 😓');
    }

}
