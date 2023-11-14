<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'nom_etudiant',
        'matiere',
        'semestre',
        'coefficient',
        'matricule',
        'filiere',
        'cycle',
        'niveau',
        'note',

    ];
}
