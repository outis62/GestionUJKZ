<?php

namespace App\Models;

use App\Models\Matiere;
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
    public function matiere()
    {
        return $this->belongsTo(Matiere::class, 'matiere', 'id');
    }
    public function cycle()
    {
        return $this->belongsTo(Cycle::class, 'cycle', 'id');
    }
    public function filiere()
    {
        return $this->belongsTo(Filiere::class, 'filiere', 'id');
    }
    public function anneeuniversitaire()
    {
        return $this->belongsTo(Anneeuniversitaire::class, 'anneeuniversitaire', 'id');
    }
}
