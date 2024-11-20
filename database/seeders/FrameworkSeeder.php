<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Framework;

class FrameworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Framework::factory(20)->create(); // Génération de 20 frameworks
    }
}
