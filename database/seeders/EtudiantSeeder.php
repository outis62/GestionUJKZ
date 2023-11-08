<?php

namespace Database\Seeders;

use App\Models\Etudiant;
use Illuminate\Database\Seeder;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Etudiant::create([
            'nom' => 'POPO',
            'prenom' => 'Chopper',
            'telephone' => '33322323',
            'genre' => 'Feminin',
            'datenaissance' => '31/12/1875',
            'matricule' => '00007',
            'cycle' => 'Licence',
            'filiere' => 'IT',
            'niveauetude' => 'Licence 2',
            'anneeuniversitaire' => '2022-2023',
            'nationalite' => 'Burkinabe',
            'email' => 'popo@gmail.com',
            'password' => bcrypt('moussapass'),
            'confirmerpassword' => bcrypt('moussapass'),
            'photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/%C3%89tudiant.jpg/1200px-%C3%89tudiant.jpg',
        ]);
    }
}
