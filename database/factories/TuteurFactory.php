<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tuteur>
 */
class TuteurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->word,
            'prenom' => $this->faker->word,
            'telephone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->email,
            'residence' => $this->faker->city,
        ];
    }
}
