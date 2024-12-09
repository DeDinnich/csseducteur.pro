<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class QuestionFactory extends Factory
{
    protected $model = \App\Models\Question::class;

    public function definition()
    {
        return [
            'id' => Str::uuid(),
            'texte' => $this->faker->sentence(15),
        ];
    }
}