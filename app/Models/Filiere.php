<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'filiere',
    ];
    public function enseignant()
    {
        return $this->hasMany(Enseignant::class);
    }
    public function eleve()
    {
        return $this->hasMany(Eleve::class);
    }
    public function note()
    {
        return $this->hasMany(Note::class);
    }
    public function niveauetude()
    {
        return $this->belongsToMany(Niveauetude::class);
    }
    public function matiere()
    {
        return $this->hasMany(Matiere::class);
    }
}
