<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FrameworkFactory extends Factory
{
    protected $model = \App\Models\Framework::class;

    public function definition()
    {
        return [
            'id' => Str::uuid(),
            'nom' => $this->faker->word(),
            'description' => $this->faker->sentence(10),
            'image' => base64_encode($this->faker->image()),
        ];
    }
}