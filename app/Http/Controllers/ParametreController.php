<?php

namespace App\Http\Controllers;

use App\Models\Anneeuniversitaire;
use App\Models\Cycle;
use App\Models\Filiere;
use App\Models\Genre;
use App\Models\Matiere;
use App\Models\Nationalite;
use App\Models\Niveauetude;
use App\Models\Semestre;

class ParametreController extends Controller
{
    public function delete($filiere)
    {
        $filiereName = $filiere->filiere;
        $filiere = Filiere::find($filiere);
        $filiere->eleve()->delete();
        $filiere->delete();

        return redirect()->back()->with('success', 'Filière ' . $filiereName . ' supprimer avec succès 🚀
        ');
    }
    public function supprimermatiere(Matiere $matiere)
    {
        $matiereName = $matiere->matiere;
        $matiere->delete();
        return redirect()->back()->with('success', 'Matière ' . $matiereName . ' supprimer avec succès 🚀
        ');
    }
    public function supprimerniveau(Niveauetude $niveauetude)
    {
        $niveauetudeName = $niveauetude->niveauetude;
        $niveauetude->eleve()->delete();
        $niveauetude->delete();
        return redirect()->back()->with('success', 'Nieau d\' étude ' . $niveauetudeName . ' supprimer avec succes 🚀
        ');
    }

    public function supprimernationalite(Nationalite $nationalite)
    {
        $nationaliteName = $nationalite->nationalite;
        $nationalite->eleve()->delete();
        $nationalite->delete();
        return redirect()->back()->with('success', 'Nationalité ' . $nationaliteName . ' supprimer avec succès 🚀
        ');
    }
    public function supprimeranneeuniv(Anneeuniversitaire $anneeuniversitaire)
    {
        $anneeunivName = $anneeuniversitaire->anneeuniversitaire;
        $anneeuniversitaire->delete();
        return redirect()->back()->with('success', 'Annee universitaire ' . $anneeunivName . ' supprimer avec succes !');

    }
    public function supprimergenre(Genre $genre)
    {
        $genreName = $genre->genre;
        $genre->delete();
        return redirect()->back()->with('success', 'Genre ' . $genreName . ' supprimé avec succès.');
    }
    public function supprimercycle(Cycle $cycle)
    {
        $cycleName = $cycle->cycle;
        $cycle->eleve()->delete();
        $cycle->delete();
        return redirect()->back()->with('success', 'Le cycle ' . $cycleName . ' à été supprimer avec succes !');
    }
    public function supprimersemestre(Semestre $semestre)
    {
        $semestreName = $semestre->semestre;
        $semestre->delete();
        return redirect()->back()->with('success', 'Semestre ' . $semestreName . ' supprimer avec succes !');
    }

}
