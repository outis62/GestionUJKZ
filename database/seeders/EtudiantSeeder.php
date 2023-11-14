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
            'nom' => 'SOSO',
            'prenom' => 'Proot',
            'telephone' => '45561122',
            'genre_id' => '9a88b27f-6d35-42f2-9b90-5825ce7bc47c',
            'datenaissance' => '31/12/2019',
            'matricule' => '000010',
            'cycle_id' => '9a88b247-11c1-4851-b0e0-f6aced341a1e',
            'filiere_id' => '9a9c685a-ac16-4e6f-8715-bea656eeba09',
            'niveauetude_id' => '9a88b26c-fdca-4c72-bb08-0e37d55fd66e',
            'anneeuniversitaire_id' => '9a88b237-b268-41a1-801a-fbd2b8be56a9',
            'nationalite_id' => '9a964145-9976-48da-9ba9-705b7b49ce02',
            'email' => 'soso@gmail.com',
            'password' => bcrypt('sosopass'),
            'confirmerpassword' => bcrypt('sosopass'),
            'photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/%C3%89tudiant.jpg/1200px-%C3%89tudiant.jpg',
        ]);
    }
}
