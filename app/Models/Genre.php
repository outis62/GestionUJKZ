<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'genre',
    ];
    public function eleve()
    {
        return $this->hasMany(Eleve::class);
    }
}
