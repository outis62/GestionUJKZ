<?php

namespace App\Http\Controllers;

use App\Models\Anneeuniversitaire;
use App\Models\Cycle;
use App\Models\Etudiant;
use App\Models\Filiere;
use App\Models\Genre;
use App\Models\Matiere;
use App\Models\Nationalite;
use App\Models\Niveauetude;
use App\Models\Semestre;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
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
    public function ajoutetudiant(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'telephone' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'datenaissance' => 'required|string|max:255',
            'matricule' => 'required|string|max:255',
            'cycle' => 'required|string|max:255',
            'filiere' => 'required|string|max:255',
            'niveauetude' => 'required|string|max:255',
            'anneeuniversitaire' => 'required|string|max:255',
            'nationalite' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|min:4|confirmed',
            'confirmerpassword' => 'required|string|min:4|confirmed',
            'photo' => 'required|file|max:255',
        ]);

        if ($request->hasFile('photo')) {
            $fileName = time() . $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('public', $fileName);
            $photoPath = '/storage/' . $fileName;
        }

        $etudiant = new Etudiant();
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->telephone = $request->input('telephone');
        $etudiant->genre = $request->input('genre');
        $etudiant->datenaissance = $request->input('datenaissance');
        $etudiant->matricule = $request->input('matricule');
        $etudiant->cycle = $request->input('cycle');
        $etudiant->filiere = $request->input('filiere');
        $etudiant->niveauetude = $request->input('niveauetude');
        $etudiant->anneeuniversitaire = $request->input('anneeuniversitaire');
        $etudiant->nationalite = $request->input('nationalite');
        $etudiant->email = $request->input('email');
        $etudiant->password = $request->input('password');
        $etudiant->confirmerpassword = $request->input('confirmerpassword');
        $etudiant->photo = $photoPath;
        $etudiant->save();

        return redirect()->back()->with('success', 'Étudiant ajouté avec succès.');

    }

    public function listeIT2()
    {
        $matiere = Matiere::all();
        $semestre = Semestre::all();
        $filiere = "IT";
        $cycle = "Licence";
        $niveauetude = "Licence 2";

        $etudiant = Etudiant::where('filiere', $filiere)
            ->where('cycle', $cycle)
            ->where('niveauetude', $niveauetude)
            ->get();

        return view('note.listeit2', [
            'etudiant' => $etudiant,
            'filiere' => $filiere,
            'cycle' => $cycle,
            'niveauetude' => $niveauetude,
            'matiere' => $matiere,
            'semestre' => $semestre,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $etudiant = Etudiant::all();

        return view('forme.listeetudiant', [
            'etudiant' => $etudiant,
        ]);
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
