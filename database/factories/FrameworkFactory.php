<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Framework>
 */
class FrameworkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'nom' => $this->faker->word,
            'type' => $this->faker->randomElement(['frontend', 'backend', 'fullstack']),
            'popularite' => $this->faker->randomElement(['faible', 'moyenne', 'forte']),
            'difficulte' => $this->faker->randomElement(['facile', 'intermediaire', 'difficile']),
            'langage_associe' => $this->faker->randomElement(['PHP', 'JavaScript', 'Python', 'Ruby']),
            'open_source' => $this->faker->boolean,
        ];
    }
}
