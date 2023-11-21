<?php

namespace Database\Factories;

use App\Models\Anneeuniversitaire;
use App\Models\Cycle;
use App\Models\Filiere;
use App\Models\Matiere;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enseignant>
 */
class EnseignantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $matiereIds = Matiere::pluck('id')->toArray();
        $cycleIds = Cycle::pluck('id')->toArray();
        $filiereIds = Filiere::pluck('id')->toArray();
        $anneeuniversitaireIds = Anneeuniversitaire::pluck('id')->toArray();

        return [
            'nom' => $this->faker->word,
            'prenom' => $this->faker->word,
            'telephone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->email,
            'password' => bcrypt('password'), // utilisez une méthode appropriée pour générer des mots de passe
            'adhesion' => $this->faker->date,
            'matiere_id' => $this->faker->randomElement($matiereIds),
            'cycle_id' => $this->faker->randomElement($cycleIds),
            'filiere_id' => $this->faker->randomElement($filiereIds),
            'anneeuniversitaire_id' => $this->faker->randomElement($anneeuniversitaireIds),
        ];
    }

}
