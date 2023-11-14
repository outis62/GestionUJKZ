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
use App\Models\Note;
use App\Models\Semestre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function ajoutetudiant(Request $request)
    {
        // dd($request->all());

        $etudiant = new etudiant();
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->telephone = $request->input('telephone');
        $etudiant->genre_id = $request->input('genre_id');
        $etudiant->datenaissance = $request->input('datenaissance');
        $etudiant->matricule = $request->input('matricule');
        $etudiant->cycle_id = $request->input('cycle_id');
        $etudiant->filiere_id = $request->input('filiere_id');
        $etudiant->niveauetude_id = $request->input('niveauetude_id');
        $etudiant->anneeuniversitaire_id = $request->input('anneeuniversitaire_id');
        $etudiant->nationalite_id = $request->input('nationalite_id');
        $etudiant->email = $request->input('email');
        $etudiant->password = $request->input('password');
        $etudiant->confirmerpassword = $request->input('confirmerpassword');
        $etudiant->photo = $request->input('photo');
        $etudiant->save();

        return redirect()->back()->with('success', 'Étudiant ajouté avec succès.');

    }

    public function listeELN2()
    {
        $matiere = Matiere::all();
        $semestre = Semestre::all();
        $etudiant = DB::table('etudiants')
            ->join('filieres', 'etudiants.filiere_id', '=', 'filieres.id')
            ->join('cycles', 'etudiants.cycle_id', '=', 'cycles.id')
            ->join('niveauetudes', 'etudiants.niveauetude_id', '=', 'niveauetudes.id')
            ->select('etudiants.*', 'filieres.filiere as filiere', 'cycles.cycle as cycle', 'niveauetudes.niveauetude as niveauetude')
            ->where('filieres.filiere', 'ELN')
            ->where('niveauetudes.niveauetude', 'LICENCE 2')
            ->where('cycles.cycle', 'LICENCE')
            ->get();

        return view('note.listeeln2', [
            'etudiant' => $etudiant,
            'matiere' => $matiere,
            'semestre' => $semestre,
        ]);
    }

    public function store()
    {
        $etudiant = Etudiant::all();

        return view('forme.listeetudiant', [
            'etudiant' => $etudiant,
        ]);
    }
    public function classe()
    {

        $etudianteln2 = DB::table('etudiants')
            ->join('filieres', 'etudiants.filiere_id', '=', 'filieres.id')
            ->join('cycles', 'etudiants.cycle_id', '=', 'cycles.id')
            ->join('niveauetudes', 'etudiants.niveauetude_id', '=', 'niveauetudes.id')
            ->select('etudiants.*', 'filieres.filiere as filiere', 'cycles.cycle as cycle', 'niveauetudes.niveauetude as niveauetude')
            ->where('filieres.filiere', 'ELN')
            ->where('niveauetudes.niveauetude', 'LICENCE 2')
            ->where('cycles.cycle', 'LICENCE')
            ->count();

        return view('note.classe', [
            'etudianteln2' => $etudianteln2,
        ]);
    }
    public function enregistrerNotes(Request $request)
    {
        $notes = $request->input('note');
        $nomsEtudiants = $request->input('nom_etudiant');
        $matiere = $request->input('matiere');
        $semestre = $request->input('semestre');
        $matricules = $request->input('matricule');
        $filieres = $request->input('filiere');
        $cycles = $request->input('cycle');
        $niveaux = $request->input('niveau');
        $coefficient = $request->input('coefficient');

        foreach ($notes as $etudiantId => $note) {
            Note::create([
                'etudiant_id' => $etudiantId,
                'note' => $note,
                'nom_etudiant' => $nomsEtudiants[$etudiantId],
                'matiere' => $matiere,
                'semestre' => $semestre,
                'matricule' => $matricules[$etudiantId],
                'filiere' => $filieres[$etudiantId],
                'cycle' => $cycles[$etudiantId],
                'niveau' => $niveaux[$etudiantId],
                'coefficient' => $coefficient,
            ]);
        }

        // Redirigez l'utilisateur vers une autre page ou effectuez d'autres actions après l'enregistrement des notes.

        return redirect()->back()->with('success', 'Les notes ont été enregistrées avec succès.');
    }

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
