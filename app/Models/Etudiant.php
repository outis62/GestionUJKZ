<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'genre',
        'datenaissance',
        'matricule',
        'cycle',
        'filiere',
        'niveauetude',
        'anneeuniversitaire',
        'nationalite',
        'email',
        'password',
        'confirmerpassword',
        'photo',
    ];
    protected $hidden = [
        'password',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function nationalite()
    {
        return $this->belongsTo(Nationalite::class, 'nationalite');
    }
}
