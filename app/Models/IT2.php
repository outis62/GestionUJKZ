<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IT2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'matricule',
        'filiere',
        'cycle',
        'niveauetude',
        'matiere',
        'semestre',
        'note',
    ];
}
