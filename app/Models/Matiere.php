<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'matiere',
        'coefficient',
        'filiere_id',
    ];
    public function enseignant()
    {
        return $this->belongsTo(Enseignant::class);
    }
    public function note()
    {
        return $this->hasMany(Note::class);
    }
    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }
}
