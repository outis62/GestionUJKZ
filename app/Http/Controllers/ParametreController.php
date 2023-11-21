<?php

namespace App\Http\Controllers;

use App\Models\Filiere;

class ParametreController extends Controller
{
    public function delete($filiere)
    {
        $filiere = Filiere::find($filiere);
        $eleve = $filiere->eleve;
        $enseignant = $filiere->enseignant;
        foreach ($eleve as $eleve) {
            $eleve->delete();
        }
        foreach ($enseignant as $enseignant) {
            $enseignant->delete();
        }
        $filiere->delete();

        return redirect()->back();
    }
}
