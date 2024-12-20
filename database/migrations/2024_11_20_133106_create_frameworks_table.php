<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrameworksTable extends Migration
{
    public function up()
    {
        Schema::create('frameworks', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nom');
            $table->string('description'); 
            $table->longText('image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('frameworks');
    }
}