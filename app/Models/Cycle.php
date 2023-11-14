<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'cycle',
    ];
    public function enseignant()
    {
        return $this->hasMany(Enseignant::class);
    }
}
