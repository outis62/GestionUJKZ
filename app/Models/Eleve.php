<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = ['nom', 'prenom', 'telephone', 'email', 'genre_id', 'cycle_id', 'filiere_id', 'niveauetude_id', 'anneeuniversitaire_id', 'nationalite_id', 'matricule', 'datenaissance', 'password', 'confirmerpassword', 'image'];

    protected $hidden = [
        'password',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'confirmerpassword' => 'hashed',
    ];
    public function nationalite()
    {
        return $this->belongsTo(Nationalite::class);
    }
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
    public function cycle()
    {
        return $this->belongsTo(Cycle::class);
    }
    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }
    public function niveauetude()
    {
        return $this->belongsTo(Niveauetude::class);
    }
    public function anneeuniversitaire()
    {
        return $this->belongsTo(Anneeuniversitaire::class);
    }
    public function tuteur()
    {
        return $this->belongsTo(Tuteur::class);
    }
}
