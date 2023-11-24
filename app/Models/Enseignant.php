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
        'filiere_id',
        'cycle_id',
        'matiere_id',
        'adhesion',
        'anneeuniversitaire_id',
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
        return $this->hasMany(Matiere::class);
    }
    public function cycle()
    {
        return $this->belongsTo(Cycle::class);
    }
    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }
    public function anneeuniversitaire()
    {
        return $this->belongsTo(Anneeuniversitaire::class);
    }
}
