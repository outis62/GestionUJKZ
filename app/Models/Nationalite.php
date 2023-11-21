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
    public function eleve()
    {
        return $this->hasMany(Eleve::class);
    }
}
