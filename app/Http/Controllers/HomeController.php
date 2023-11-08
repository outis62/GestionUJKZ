<?php

namespace App\Http\Controllers;

use App\Models\Anneeuniversitaire;
use App\Models\Cycle;
use App\Models\Enseignant;
use App\Models\Etudiant;
use App\Models\Filiere;
use App\Models\Genre;
use App\Models\Matiere;
use App\Models\Nationalite;
use App\Models\Niveauetude;
use App\Models\Role;
use App\Models\Semestre;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        $user = User::all();
        $enseignant = Enseignant::count();
        $etudiant = Etudiant::count();
        $filiere = Filiere::count();
        $matiere = Matiere::count();
        $nationalite = Nationalite::count();
        return view('home', [
            'enseignant' => $enseignant,
            'etudiant' => $etudiant,
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

        // Créez un nouveau cycle en utilisant les données du formulaire
        $anneeuniversitaire = new Anneeuniversitaire();
        $anneeuniversitaire->anneeuniversitaire = $request->input('anneeuniversitaire');
        $anneeuniversitaire->save();

        // Redirigez l'utilisateur ou renvoyez une réponse appropriée
        return redirect()->back()->with('success', 'anneeuniversitaire ajouté avec succès');
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
        // Validez les données du formulaire si nécessaire
        $request->validate([
            'cycle' => 'required|string|max:255',
        ]);

        // Créez un nouveau cycle en utilisant les données du formulaire
        $cycle = new Cycle();
        $cycle->cycle = $request->input('cycle');
        $cycle->save();

        // Redirigez l'utilisateur ou renvoyez une réponse appropriée
        return redirect()->back()->with('success', 'Cycle ajouté avec succès');
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
        // Validez les données du formulaire si nécessaire
        $request->validate([
            'filiere' => 'required|string|max:255',
        ]);

        // Créez un nouveau cycle en utilisant les données du formulaire
        $filiere = new Filiere();
        $filiere->filiere = $request->filiere;
        $filiere->save();

        // Redirigez l'utilisateur ou renvoyez une réponse appropriée
        return redirect()->back()->with('success', 'filiere ajouté avec succès');
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

        // Créez un nouveau cycle en utilisant les données du formulaire
        $niveauetude = new Niveauetude();
        $niveauetude->niveauetude = $request->niveauetude;
        $niveauetude->save();

        // Redirigez l'utilisateur ou renvoyez une réponse appropriée
        return redirect()->back()->with('success', 'niveau ajouté avec succès');
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

        // Créez un nouveau cycle en utilisant les données du formulaire
        $nationalite = new Nationalite();
        $nationalite->nationalite = $request->nationalite;
        $nationalite->save();

        // Redirigez l'utilisateur ou renvoyez une réponse appropriée
        return redirect()->back()->with('success', 'niveau ajouté avec succès');
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
        return redirect()->back()->with('success', 'genre ajouté avec succès');
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
        return redirect()->back()->with('success', 'semestre ajouté avec succès');
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
        return view('parametre.matiere');
    }
    public function ajoutmatiere(Request $request)
    {

        $request->validate([
            'matiere' => 'required|string|max:255',
            'coefficient' => 'required|integer|max:255',
        ]);
        Matiere::create([
            'matiere' => $request->matiere,
            'coefficient' => $request->coefficient,
        ]);
        return redirect()->back()->with('success', 'matiere ajouté avec succès');
    }
    public function listematiere()
    {
        $matiere = Matiere::all();
        return view('parametre.listematiere', [
            'matiere' => $matiere,
        ]);
    }
    public function role()
    {
        return view('parametre.role');
    }
    public function ajoutrole(Request $request)
    {

        $request->validate([
            'role' => 'required|string|max:255',
        ]);
        Role::create([
            'role' => $request->role,
        ]);
        return redirect()->back();
    }
    public function listerole()
    {
        $role = Role::all();
        return view('parametre.listerole', [
            'role' => $role,
        ]);
    }

    public function classe()
    {
        $etudiants = Etudiant::all();
        return view('note.classe', [
            'etudiants' => $etudiants,
        ]);
    }
}
