<?php

namespace App\Http\Controllers;

use App\Models\Filiere;

class ParametreController extends Controller
{
    public function delete($id)
    {
        $filiere = Filiere::find($id);
        $etudiant = $filiere->etudiant;
        foreach ($etudiant as $etudiant) {
            $etudiant->delete();
        }
        $filiere->delete();

        return redirect()->back();
    }
}
