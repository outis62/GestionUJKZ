<?php

namespace App\Http\Controllers;

use App\Http\Requests\EtudiantRequest;
use App\Models\Etudiant;
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

    public function ajoutetudiant(EtudiantRequest $request)
    {
        // $request->validate([
        //     'nom' => 'required|min:3|max:255',
        //     'description' => 'required|min:3|max:255',
        //     'image' => 'required|min:3|max:255',
        //     'stock_id' => 'required|exists:stocks,id'
        // ]);
        // $product = new Product();
        // $product->nom = $request->nom;
        // $product->description = $request->description;
        // $product->image = $request->image;
        // $product->stock_id = $request->stock_id;
        // $product->save();
        // return redirect()->route('products.index')->with('success', 'Produit créé avec succès !');
        $inputs = $request->validated();
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('/images');
            $inputs['photo'] = $path;
        }
        Etudiant::create($inputs);
        return redirect()->route('ajoutetudiant')->with('success', 'Produit créé avec succès !');
    }

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
