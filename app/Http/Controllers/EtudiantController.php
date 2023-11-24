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
    public function ListeEln1()
    {
        $matiere = Matiere::all();
        $semestre = Semestre::all();
        $eleve = DB::table('eleves')
            ->join('filieres', 'eleves.filiere_id', '=', 'filieres.id')
            ->join('cycles', 'eleves.cycle_id', '=', 'cycles.id')
            ->join('niveauetudes', 'eleves.niveauetude_id', '=', 'niveauetudes.id')
            ->select('eleves.*', 'filieres.filiere as filiere', 'cycles.cycle as cycle', 'niveauetudes.niveauetude as niveauetude')
            ->where('filieres.filiere', 'ELN')
            ->where('niveauetudes.niveauetude', 'LICENCE 1')
            ->where('cycles.cycle', 'LICENCE')
            ->get();

        return view('note.liste-eln-1', [
            'eleve' => $eleve,
            'matiere' => $matiere,
            'semestre' => $semestre,
        ]);
    }
    public function ListeEln3()
    {
        $matiere = Matiere::all();
        $semestre = Semestre::all();
        $eleve = DB::table('eleves')
            ->join('filieres', 'eleves.filiere_id', '=', 'filieres.id')
            ->join('cycles', 'eleves.cycle_id', '=', 'cycles.id')
            ->join('niveauetudes', 'eleves.niveauetude_id', '=', 'niveauetudes.id')
            ->select('eleves.*', 'filieres.filiere as filiere', 'cycles.cycle as cycle', 'niveauetudes.niveauetude as niveauetude')
            ->where('filieres.filiere', 'ELN')
            ->where('niveauetudes.niveauetude', 'LICENCE 3')
            ->where('cycles.cycle', 'LICENCE')
            ->get();

        return view('note.liste-eln-3', [
            'eleve' => $eleve,
            'matiere' => $matiere,
            'semestre' => $semestre,
        ]);
    }
    public function enregistrerNotes(Request $request)
    {
        $notes = $request->input('note');
        if ($notes) {
            foreach ($notes as $studentId => $noteValue) {
                // Ici, vous pouvez enregistrer la note dans votre base de données
                $note = new Note();
                $note->eleve_id = $studentId;
                $note->eleve_id = $request->input('eleve_id')[$studentId];
                $note->filiere_id = $request->input('filiere_id')[$studentId];
                $note->cycle_id = $request->input('cycle_id')[$studentId];
                $note->niveauetude_id = $request->input('niveauetude_id')[$studentId];
                $note->matricule = $request->input('matricule')[$studentId];
                $note->matiere_id = $request->input('matiere_id');
                $note->semestre_id = $request->input('semestre_id');
                $note->coefficient = $request->input('coefficient');
                $note->note = $noteValue;
                $note->save();
            }
        }

        // Le reste de votre logique de traitement...

        // Redirigez l'utilisateur ou effectuez d'autres actions après avoir enregistré les notes
        return redirect()->back()->with('message', 'Notes enregistrées avec succès !');
    }

    // Rediriger vers une page de succès

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
