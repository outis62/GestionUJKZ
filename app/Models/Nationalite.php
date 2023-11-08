<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nationalite extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'nationalite',
    ];
    public function etudiant()
    {
        return $this->hasMany(Etudiant::class);
    }
}
