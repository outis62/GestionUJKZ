<?php

namespace App\Models;

use App\Models\Nationalite;
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
        'genre_id',
        'datenaissance',
        'matricule',
        'nationalite_id',
        'cycle_id',
        'filiere_id',
        'niveauetude_id',
        'anneeuniversitaire_id',
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
        return $this->belongsTo(Nationalite::class, 'nationalite_id', 'id');
    }
    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }
    public function cycle()
    {
        return $this->belongsTo(Cycle::class, 'cycle_id', 'id');
    }
    public function filiere()
    {
        return $this->belongsTo(Filiere::class, 'filiere_id', 'id');
    }
    public function niveauetude()
    {
        return $this->belongsTo(Niveauetude::class, 'niveauetude_id', 'id');
    }
    public function anneeuniversitaire()
    {
        return $this->belongsTo(Anneeuniversitaire::class, 'anneeuniversitaire_id', 'id');
    }
}
