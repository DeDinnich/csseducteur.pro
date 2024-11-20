<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrameworksTable extends Migration
{
    public function up()
    {
        Schema::create('frameworks', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('nom'); // Vérifiez que cette colonne est présente
            $table->enum('type', ['frontend', 'backend', 'fullstack']);
            $table->enum('popularite', ['faible', 'moyenne', 'forte']);
            $table->enum('difficulte', ['facile', 'intermediaire', 'difficile']);
            $table->string('langage_associe');
            $table->boolean('open_source');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('frameworks');
    }
}
