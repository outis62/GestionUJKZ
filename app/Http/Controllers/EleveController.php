<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEleveRequest;
use App\Http\Requests\UpdateEleveRequest;
use App\Models\Anneeuniversitaire;
use App\Models\Cycle;
use App\Models\Eleve;
use App\Models\Filiere;
use App\Models\Genre;
use App\Models\Nationalite;
use App\Models\Niveauetude;
use Illuminate\Support\Facades\Storage;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genre = Genre::all();
        $cycle = Cycle::all();
        $filiere = Filiere::all();
        $niveauetude = Niveauetude::all();
        $anneeuniversitaire = Anneeuniversitaire::all();
        $nationalite = Nationalite::all();
        return view('forme.etudiantsave', [
            'genre' => $genre,
            'cycle' => $cycle,
            'filiere' => $filiere,
            'niveauetude' => $niveauetude,
            'anneeuniversitaire' => $anneeuniversitaire,
            'nationalite' => $nationalite,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $eleve = Eleve::all();

        return view('forme.listeetudiant', [
            'eleve' => $eleve,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEleveRequest $request)
    {
        // dd($request->all());
        $inputs = $request->validated();
        if (!Storage::exists('images')) {
            Storage::makeDirectory('images');
        }

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images');
            $inputs['image'] = $path;
        }
        Eleve::create($inputs);
        return redirect()->route('Eleve.index')->with('success', 'Etudiant créé avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Eleve $eleve)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Eleve $eleve)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEleveRequest $request, Eleve $eleve)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eleve $eleve)
    {
        $eleve->delete();
        return redirect()->back();
    }
}
