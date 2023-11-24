<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Matiere;
use App\Models\Niveauetude;

class ParametreController extends Controller
{
    public function delete($filiere)
    {
        $filiere = Filiere::find($filiere);
        $filiere->eleve()->delete();
        $filiere->delete();

        return redirect()->back()->with('success', 'Filière supprimer avec succès !');
    }
    public function supprimermatiere(Matiere $matiere)
    {
        $matiere->delete();
        return redirect()->back()->with('success', 'Matière supprimer avec succès !');
    }
    public function supprimerniveau(Niveauetude $niveauetude)
    {
        $niveauetude->eleve()->delete();
        $niveauetude->delete();
        return redirect()->back()->with('success', 'Nieau d\' étude supprimer avec succes !');
    }
}
