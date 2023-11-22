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
    ];
    public function enseignant()
    {
        return $this->hasMany(Enseignant::class);
    }
    public function note()
    {
        return $this->hasMany(Note::class);
    }
}
