<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'eleve_id',
        'matiere_id',
        'semestre_id',
        'coefficient',
        'matricule',
        'filiere_id',
        'cycle_id',
        'niveauetude_id',
        'note',

    ];
    public function eleve()
    {
        return $this->belongsTo(Eleve::class);
    }
    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }
    public function semestre()
    {
        return $this->belongsTo(Semestre::class);
    }
    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }
    public function cycle()
    {
        return $this->belongsTo(Cycle::class);
    }
    public function niveauetude()
    {
        return $this->belongsTo(Niveauetude::class);
    }
}
