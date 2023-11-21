<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuteur extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = ([
        'nom',
        'prenom',
        'telephone',
        'email',
        'residence',
    ]);
    public function eleve()
    {
        return $this->hasMany(Eleve::class);
    }
}
