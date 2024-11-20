<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Ajouter des utilisateurs avec des emails et mots de passe spécifiques
        User::create([
            'uuid' => \Str::uuid(),
            'email' => 'admin@example.com',
            'password' => bcrypt('adminpassword'),
        ]);

        User::create([
            'uuid' => \Str::uuid(),
            'email' => 'user1@example.com',
            'password' => bcrypt('userpassword1'),
        ]);

        User::create([
            'uuid' => \Str::uuid(),
            'email' => 'user2@example.com',
            'password' => bcrypt('userpassword2'),
        ]);

        // Générer des utilisateurs aléatoires
        User::factory()->count(10)->create();
    }
}
