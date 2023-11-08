<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'email',
        'password',
        'filiere',
        'cycle',
        'matiere',
        'adhesion',
        'anneeuniversitaire',
        'role',
    ];
    protected $hidden = [
        'password',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
