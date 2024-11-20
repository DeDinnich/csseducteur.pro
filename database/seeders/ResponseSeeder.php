<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Response;
use App\Models\Question;

class ResponseSeeder extends Seeder
{
    public function run()
    {
        Question::all()->each(function ($question) {
            // Génère 4 réponses par question
            Response::factory(4)->create([
                'question_id' => $question->id,
            ]);
        });
    }
}