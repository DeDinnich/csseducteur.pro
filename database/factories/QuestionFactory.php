<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid,
            'texte' => $this->faker->sentence, // Génération du texte
            'type' => $this->faker->randomElement(['choix unique', 'choix multiple']),
            'difficulte' => $this->faker->randomElement(['facile', 'intermediaire', 'difficile']),
            'categorie' => $this->faker->randomElement(['frontend', 'backend', 'fullstack']),
        ];
    }
}
