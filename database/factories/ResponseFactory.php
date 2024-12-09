<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Question;

class ResponseFactory extends Factory
{
    protected $model = \App\Models\Response::class;

    public function definition()
    {
        return [
            'id' => Str::uuid(),
            'question_id' => Question::factory(),
            'texte' => $this->faker->sentence(10),
        ];
    }
}