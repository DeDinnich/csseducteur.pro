<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Question;
use Illuminate\Support\Str;
use App\Models\Response;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Response>
 */
class ResponseFactory extends Factory
{
    protected $model = Response::class;

    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'question_id' => Question::factory(), // Associe une réponse à une question
            'texte' => $this->faker->sentence, // Génère un texte pour la réponse
            'correct' => $this->faker->boolean(25), // 25% de chance que la réponse soit correcte
        ];
    }
}