<?php

namespace Database\Seeders;

use App\Models\Eleve;
use Illuminate\Database\Seeder;

class EleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Eleve::factory(200)->create();
    }
}
