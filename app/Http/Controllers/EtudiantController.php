<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use App\Models\Note;
use App\Models\Semestre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EtudiantController extends Controller
{
    // public function index()
    // {
    //     $genre = Genre::all();
    //     $cycle = Cycle::all();
    //     $filiere = Filiere::all();
    //     $niveauetude = Niveauetude::all();
    //     $anneeuniversitaire = Anneeuniversitaire::all();
    //     $nationalite = Nationalite::all();
    //     return view('forme.etudiantsave', [
    //         'genre' => $genre,
    //         'cycle' => $cycle,
    //         'filiere' => $filiere,
    //         'niveauetude' => $niveauetude,
    //         'anneeuniversitaire' => $anneeuniversitaire,
    //         'nationalite' => $nationalite,
    //     ]);
    // }

    public function listeELN2()
    {
        $matiere = Matiere::all();
        $semestre = Semestre::all();
        $eleve = DB::table('eleves')
            ->join('filieres', 'eleves.filiere_id', '=', 'filieres.id')
            ->join('cycles', 'eleves.cycle_id', '=', 'cycles.id')
            ->join('niveauetudes', 'eleves.niveauetude_id', '=', 'niveauetudes.id')
            ->select('eleves.*', 'filieres.filiere as filiere', 'cycles.cycle as cycle', 'niveauetudes.niveauetude as niveauetude')
            ->where('filieres.filiere', 'ELN')
            ->where('niveauetudes.niveauetude', 'LICENCE 2')
            ->where('cycles.cycle', 'LICENCE')
            ->get();

        return view('note.listeeln2', [
            'eleve' => $eleve,
            'matiere' => $matiere,
            'semestre' => $semestre,
        ]);
    }

    // public function store()
    // {

    // }
    public function classe()
    {

        $etudianteln2 = DB::table('eleves')
            ->join('filieres', 'eleves.filiere_id', '=', 'filieres.id')
            ->join('cycles', 'eleves.cycle_id', '=', 'cycles.id')
            ->join('niveauetudes', 'eleves.niveauetude_id', '=', 'niveauetudes.id')
            ->select('etudiants.*', 'eleves.filiere as filiere', 'cycles.cycle as cycle', 'niveauetudes.niveauetude as niveauetude')
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
        $nomsEtudiants = $request->input('eleve_id');
        $matiere = $request->input('matiere_id');
        $semestre = $request->input('semestre_id');
        $matricules = $request->input('matricule');
        $filieres = $request->input('filiere_id');
        $cycles = $request->input('cycle_id');
        $niveauetudes = $request->input('niveauetude_id');
        $coefficient = $request->input('coefficient');

        foreach ($notes as $etudiantId => $note) {
            Note::create([
                'etudiant_id' => $etudiantId,
                'note' => $note,
                'eleve_id' => $nomsEtudiants[$etudiantId],
                'matiere_id' => $matiere,
                'semestre_id' => $semestre,
                'matricule' => $matricules[$etudiantId],
                'filiere_id' => $filieres[$etudiantId],
                'cycle_id' => $cycles[$etudiantId],
                'niveauetude_id' => $niveauetudes[$etudiantId],
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
