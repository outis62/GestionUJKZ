<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anneeuniversitaire extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'anneeuniversitaire',
    ];
    public function enseignant()
    {
        return $this->hasMany(Enseignant::class);
    }
}
