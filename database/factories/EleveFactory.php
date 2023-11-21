<?php

namespace Database\Factories;

use App\Models\Anneeuniversitaire;
use App\Models\Cycle;
use App\Models\Filiere;
use App\Models\Genre;
use App\Models\Nationalite;
use App\Models\Niveauetude;
use App\Models\Tuteur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Eleve>
 */
class EleveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $genreIds = Genre::pluck('id')->toArray();
        $cycleIds = Cycle::pluck('id')->toArray();
        $filiereIds = Filiere::pluck('id')->toArray();
        $nationaliteIds = Nationalite::pluck('id')->toArray();
        $niveauetudeIds = Niveauetude::pluck('id')->toArray();
        $anneeuniversitaireIds = Anneeuniversitaire::pluck('id')->toArray();
        $tuteurIds = Tuteur::pluck('id')->toArray();

        return [
            'nom' => $this->faker->word,
            'prenom' => $this->faker->word,
            'telephone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->email,
            'matricule' => $this->faker->numberBetween(1000, 9999),
            'password' => bcrypt('password'),
            'confirmerpassword' => bcrypt('password'), // utilisez une méthode appropriée pour générer des mots de passe
            'datenaissance' => $this->faker->date,
            'genre_id' => $this->faker->randomElement($genreIds),
            'nationalite_id' => $this->faker->randomElement($nationaliteIds),
            'niveauetude_id' => $this->faker->randomElement($niveauetudeIds),
            'cycle_id' => $this->faker->randomElement($cycleIds),
            'filiere_id' => $this->faker->randomElement($filiereIds),
            'anneeuniversitaire_id' => $this->faker->randomElement($anneeuniversitaireIds),
            'tuteur_id' => $this->faker->randomElement($tuteurIds),
        ];
    }

}
