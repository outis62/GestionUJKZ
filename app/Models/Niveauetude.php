<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveauetude extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'niveauetude',
    ];
    public function eleve()
    {
        return $this->hasMany(Eleve::class);
    }
    public function note()
    {
        return $this->hasMany(Note::class);
    }
    public function filiere()
    {
        return $this->belongsToMany(Filiere::class);
    }

}
