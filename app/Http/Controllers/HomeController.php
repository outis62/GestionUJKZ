<?php

namespace App\Http\Controllers;

use App\Models\Anneeuniversitaire;
use App\Models\Cycle;
use App\Models\Enseignant;
use App\Models\Filiere;
use App\Models\Genre;
use App\Models\Matiere;
use App\Models\Nationalite;
use App\Models\Niveauetude;
use App\Models\Semestre;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function etudiantsave()
    {
        return view('forme.etudiantsave');
    }
    public function anneeuniversitaire(Request $request)
    {
        // Validez les données du formulaire si nécessaire
        $request->validate([
            'anneeuniversitaire' => 'required|string|max:255',
        ]);

        // Créez une nouvelle annee en utilisant les données du formulaire
        $anneeuniversitaire = new Anneeuniversitaire();
        $anneeuniversitaire->anneeuniversitaire = $request->input('anneeuniversitaire');
        $anneeuniversitaire->save();

        // Redirigez l'utilisateur ou renvoyez une réponse appropriée
        return redirect()->back()->with('success', 'Anneé ajouté avec succès');
    }
    public function cycle(Request $request)
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
    public function filiere(Request $request)
    {
        // Validez les données du formulaire si nécessaire
        $request->validate([
            'filiere' => 'required|string|max:255',
        ]);

        // Créez un nouveau cycle en utilisant les données du formulaire
        $filiere = new Filiere();
        $filiere->filiere = $request->input('filiere');
        $filiere->save();

        // Redirigez l'utilisateur ou renvoyez une réponse appropriée
        return redirect()->back()->with('success', 'filiere ajouté avec succès');
    }
    public function niveauetude(Request $request)
    {
        // Validez les données du formulaire si nécessaire
        $request->validate([
            'niveauetude' => 'required|string|max:255',
        ]);

        // Créez un nouveau cycle en utilisant les données du formulaire
        $niveauetude = new Niveauetude();
        $niveauetude->niveauetude = $request->input('niveauetude');
        $niveauetude->save();

        // Redirigez l'utilisateur ou renvoyez une réponse appropriée
        return redirect()->back()->with('success', 'niveau etude ajouté avec succès');
    }
    public function nationalite(Request $request)
    {
        // Validez les données du formulaire si nécessaire
        $request->validate([
            'nationalite' => 'required|string|max:255',
        ]);

        // Créez un nouveau cycle en utilisant les données du formulaire
        $nationalite = new Nationalite();
        $nationalite->nationalite = $request->input('nationalite');
        $nationalite->save();

        // Redirigez l'utilisateur ou renvoyez une réponse appropriée
        return redirect()->back()->with('success', 'nationalite ajouté avec succès');
    }
    public function genre(Request $request)
    {
        // Validez les données du formulaire si nécessaire
        $request->validate([
            'genre' => 'required|string|max:255',
        ]);

        // Créez un nouveau cycle en utilisant les données du formulaire
        $genre = new Genre();
        $genre->genre = $request->input('genre');
        $genre->save();

        // Redirigez l'utilisateur ou renvoyez une réponse appropriée
        return redirect()->back()->with('success', 'genre ajouté avec succès');
    }
    public function semestre(Request $request)
    {
        // Validez les données du formulaire si nécessaire
        $request->validate([
            'semestre' => 'required|string|max:255',
        ]);

        // Créez un nouveau cycle en utilisant les données du formulaire
        $semestre = new Semestre();
        $semestre->semestre = $request->input('semestre');
        $semestre->save();

        // Redirigez l'utilisateur ou renvoyez une réponse appropriée
        return redirect()->back()->with('success', 'semestre ajouté avec succès');
    }
    public function matiere(Request $request)
    {
        // Validez les données du formulaire si nécessaire
        $request->validate([
            'matiere' => 'required|string|max:255',
        ]);

        // Créez un nouveau cycle en utilisant les données du formulaire
        $matiere = new Matiere();
        $matiere->matiere = $request->input('matiere');
        $matiere->save();

        // Redirigez l'utilisateur ou renvoyez une réponse appropriée
        return redirect()->back()->with('success', 'matiere ajouté avec succès');
    }

    // public function getfiliere()
    // {
    //     $enseignants = Enseignant::all();
    //     $filieres = Filiere::all();
    //     $matieres = Matiere::all();

    //     return view('forme.ajoutenseignant', [
    //         'enseignants' => $enseignants,
    //         'filieres' => $filieres,
    //         'matieres' => $matieres,
    //     ]);
    // }
    public function ajoutenseignant(Request $request)
    {

        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'telephone' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'filiere' => 'required|string|max:255',
            'matiere' => 'required|string|max:255',
            'adhesion' => 'required|string|max:255',
            'role' => 'required|string|max:255',
        ]);

        $enseignant = new enseignant();
        $enseignant->nom = $request->input('nom');
        $enseignant->prenom = $request->input('prenom');
        $enseignant->telephone = $request->input('telephone');
        $enseignant->email = $request->input('email');
        $enseignant->password = $request->input('password');
        $enseignant->filiere = $request->input('filiere');
        $enseignant->matiere = $request->input('matiere');
        $enseignant->adhesion = $request->input('adhesion');
        $enseignant->role = $request->input('role');

        $enseignant->save();
        return redirect('/ajoutenseignant');
    }

}
