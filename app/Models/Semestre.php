<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'semestre',
    ];
    public function note()
    {
        return $this->hasMany(Note::class);
    }
}
