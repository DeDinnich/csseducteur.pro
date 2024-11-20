<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrameworksTable extends Migration
{
    public function up()
    {
        Schema::create('frameworks', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->string('name');
            $table->enum('difficulty', ['Débutant', 'Intermédiaire', 'Avancé']);
            $table->text('features')->nullable();
            $table->boolean('grid')->default(false);
            $table->boolean('javascript_support')->default(false);
            $table->enum('lightweight', ['Oui', 'Non'])->default('Non');
            $table->string('target')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('frameworks');
    }
}
