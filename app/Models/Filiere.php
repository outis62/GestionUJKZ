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
}
