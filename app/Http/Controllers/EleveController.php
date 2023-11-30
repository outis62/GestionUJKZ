<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEleveRequest;
use App\Http\Requests\UpdateEleveRequest;
use App\Mail\EleveRegisteredMail;
use App\Models\Anneeuniversitaire;
use App\Models\Cycle;
use App\Models\Eleve;
use App\Models\Filiere;
use App\Models\Genre;
use App\Models\Nationalite;
use App\Models\Niveauetude;
use App\Models\Tuteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
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
        $eleve = Eleve::create($inputs);
        Mail::to($eleve->email)->send(new EleveRegisteredMail($eleve));
        return redirect()->route('Eleve.index')->with('message', 'Etudiant ajouté avec succès 😉');
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
        $eleveName = $eleve->nom;
        $elevePrenom = $eleve->prenom;
        $eleveFullName = $eleveName . '  ' . $elevePrenom;
        $eleve->delete();
        return redirect()->back()->with('success', 'L\'étudiant ' . $eleveFullName . ' à été supprimer avec succès 🙆');
    }

    public function searchTuteurs(Request $request)
    {
        try {
            $query = $request->input('query');

            // Sépare la chaîne de recherche en termes
            $terms = explode(' ', $query);

            // Commence la requête en filtrant par nom
            $queryBuilder = Tuteur::query()->where('nom', 'LIKE', "%{$terms[0]}%");

            // Ajoute des conditions supplémentaires pour chaque terme restant
            foreach (array_slice($terms, 1) as $term) {
                $queryBuilder->where('prenom', 'LIKE', "%{$term}%");
            }

            // Exécute la requête
            $tuteurs = $queryBuilder->get();

            return response()->json($tuteurs);
        } catch (\Exception $e) {
            // Log l'erreur dans le fichier de log de Laravel
            Log::error('Erreur lors de la recherche des tuteurs: ' . $e->getMessage());

            // Retourne une réponse JSON avec un message d'erreur
            return response()->json(['error' => 'Erreur lors de la recherche des tuteurs'], 500);
        }
    }

}
