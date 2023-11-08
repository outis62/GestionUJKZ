<?php

namespace Database\Seeders;

use App\Models\Enseignant;
use Illuminate\Database\Seeder;

class EnseignantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Enseignant::create([
            'nom' => 'ZOUBGA',
            'prenom' => 'Alexis',
            'telephone' => '4353535',
            'email' => 'zoundi@gmail.com',
            'password' => bcrypt('zoubgapass'),
            'filiere' => 'MPCI',
            'matiere' => 'Mathematique',
            'adhesion' => '31/08/2018',
            'role' => 'enseignant',
        ]);
        Enseignant::create([
            'nom' => 'BANDAOGO',
            'prenom' => 'Abdoul Fatao',
            'telephone' => '00099988',
            'email' => 'bandaogo@gmail.com',
            'password' => bcrypt('bandaogopass'),
            'filiere' => 'Finance Compta(FC)',
            'matiere' => 'Statistique',
            'adhesion' => '31/12/2022',
            'role' => 'enseignant',
        ]);
    }
}
