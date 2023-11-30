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
        Enseignant::factory(30)->create();
    }
}
