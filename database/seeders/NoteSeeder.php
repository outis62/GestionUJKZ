<?php

namespace Database\Seeders;

use App\Models\Note;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Note::create([
            'nom_etudiant' => 'SAWADOGO Moussa',
            'matiere' => 'Analyse mathematique',
            'semestre' => 'S1',
            'coefficient' => '3',
            'filiere' => 'ELN',
            'cycle' => 'LICENCE',
            'niveau' => 'Licence 2',
            'note' => '16',
        ]);
    }
}
