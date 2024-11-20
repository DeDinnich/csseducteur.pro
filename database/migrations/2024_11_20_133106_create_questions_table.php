<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('texte'); // Ajoutez cette ligne si elle manque
            $table->enum('type', ['choix unique', 'choix multiple']);
            $table->enum('difficulte', ['facile', 'intermediaire', 'difficile']);
            $table->enum('categorie', ['frontend', 'backend', 'fullstack']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('questions');
    }
}