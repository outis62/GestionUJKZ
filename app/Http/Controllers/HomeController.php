<?php

namespace App\Http\Controllers;

use App\Models\Anneeuniversitaire;
use App\Models\Cycle;
use App\Models\Eleve;
use App\Models\Enseignant;
use App\Models\Filiere;
use App\Models\Genre;
use App\Models\Matiere;
use App\Models\Nationalite;
use App\Models\Niveauetude;
use App\Models\Semestre;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function accueil()
    {
        return view('accueil.accueil');
    }
    public function home()
    {
        $user = User::all();
        $enseignant = Enseignant::count();
        $eleve = Eleve::count();
        $filiere = Filiere::count();
        $matiere = Matiere::count();
        $nationalite = Nationalite::count();
        return view('home', [
            'enseignant' => $enseignant,
            'eleve' => $eleve,
            'filiere' => $filiere,
            'matiere' => $matiere,
            'nationalite' => $nationalite,
            'user' => $user,
        ]);
    }
    public function anneeuniversitaire()
    {
        return view('parametre.anneeuniv');
    }
    public function ajoutanneeuniv(Request $request)
    {
        $request->validate([
            'anneeuniversitaire' => 'required|string|max:255',
        ]);

        $anneeuniversitaire = new Anneeuniversitaire();
        $anneeuniversitaire->anneeuniversitaire = $request->input('anneeuniversitaire');
        $anneeuniversitaire->save();
        return redirect()->back()->with('message', 'Année universitaire ajoutée avec succès !');
    }
    public function listeanneeuniv()
    {
        $anneeuniv = Anneeuniversitaire::all();
        return view('parametre.listeanneeuniv', [
            'anneeuniv' => $anneeuniv,
        ]);
    }
    public function cycle()
    {
        return view('parametre.cycle');
    }
    public function ajoutcycle(Request $request)
    {

        $request->validate([
            'cycle' => 'required|string|max:255',
        ]);

        $cycle = new Cycle();
        $cycle->cycle = $request->input('cycle');
        $cycle->save();

        return redirect()->back()->with('message', 'Cycle ajouté avec succès !');
    }
    public function listecycle()
    {
        $cycle = Cycle::all();
        return view('parametre.listecycle', [
            'cycle' => $cycle,
        ]);
    }
    public function filiere()
    {
        return view('parametre.filiere');
    }
    public function ajoutfiliere(Request $request)
    {

        $request->validate([
            'filiere' => 'required|string|max:255',
        ]);

        $filiere = new Filiere();
        $filiere->filiere = $request->filiere;
        $filiere->save();
        return redirect()->back()->with('message', 'Filière ajoutée avec succès !');
    }
    public function ListeFiliere()
    {
        $filiere = Filiere::all();
        return view('parametre.listefiliere', [
            'filiere' => $filiere,
        ]);
    }
    public function niveauetude()
    {
        return view('parametre.niveauetude');
    }
    public function ajoutniveauetude(Request $request)
    {

        $request->validate([
            'niveauetude' => 'required|string|max:255',
        ]);

        $niveauetude = new Niveauetude();
        $niveauetude->niveauetude = $request->niveauetude;
        $niveauetude->save();
        return redirect()->back()->with('message', 'Niveau d\'étude ajouté avec succès !');
    }
    public function listeniveauetude()
    {
        $niveauetude = Niveauetude::all();
        return view('parametre.listeniveauetude', [
            'niveauetude' => $niveauetude,
        ]);
    }
    public function nationalite()
    {
        return view('parametre.nationalite');
    }
    public function ajoutnationalite(Request $request)
    {

        $request->validate([
            'nationalite' => 'required|string|max:255',
        ]);

        $nationalite = new Nationalite();
        $nationalite->nationalite = $request->nationalite;
        $nationalite->save();
        return redirect()->back()->with('message', 'Nationalité ajoutée avec succès !');
    }
    public function listenationalite()
    {
        $nationalite = Nationalite::all();
        return view('parametre.listenationalite', [
            'nationalite' => $nationalite,
        ]);
    }
    public function genre()
    {
        return view('parametre.genre');
    }
    public function ajoutgenre(Request $request)
    {

        $request->validate([
            'genre' => 'required|string|max:255',
        ]);
        Genre::create([
            'genre' => $request->genre,
        ]);
        return redirect()->back()->with('message', 'Genre ajouté avec succès !');
    }
    public function listegenre()
    {
        $genre = Genre::all();
        return view('parametre.listegenre', [
            'genre' => $genre,
        ]);
    }
    public function semestre()
    {
        return view('parametre.semestre');
    }
    public function ajoutsemestre(Request $request)
    {

        $request->validate([
            'semestre' => 'required|string|max:255',
        ]);
        Semestre::create([
            'semestre' => $request->semestre,
        ]);
        return redirect()->back()->with('message', 'Semestre ajouté avec succès !');
    }
    public function listesemestre()
    {
        $semestre = Semestre::all();
        return view('parametre.listesemestre', [
            'semestre' => $semestre,
        ]);
    }
    public function matiere()
    {
        $filiere = Filiere::all();
        return view('parametre.matiere', ['filiere' => $filiere]);
    }
    public function ajoutmatiere(Request $request)
    {

        $request->validate([
            'matiere' => 'required|string|max:255',
            'coefficient' => 'required|integer|max:255',
            'filiere_id' => 'required',
        ]);
        Matiere::create([
            'matiere' => $request->matiere,
            'coefficient' => $request->coefficient,
            'filiere_id' => $request->filiere_id,

        ]);
        return redirect()->back()->with('message', 'Matière ajoutée avec succès !');
    }
    public function listematiere()
    {
        $matiere = Matiere::all();
        return view('parametre.listematiere', [
            'matiere' => $matiere,
        ]);
    }
}
