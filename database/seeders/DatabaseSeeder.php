<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Framework;
use App\Models\Question;
use App\Models\Response;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Framework::factory(10)->create();

        Question::factory(10)
            ->has(Response::factory(4)) // 4 réponses pour chaque question
            ->create();
    }
}