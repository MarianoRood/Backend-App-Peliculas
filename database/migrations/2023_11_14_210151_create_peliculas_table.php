<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->unsignedBigInteger('director_id');
            $table->integer('duration');
            $table->unsignedBigInteger('categorie_id');
            $table->text('sipnosis');
            $table->string('path_img');
            $table->boolean('status')->default(true);
            $table->timestamps();

            $table->foreign('director_id')
              ->references('id')
              ->on('directors');

            $table->foreign('categorie_id')
              ->references('id')
              ->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peliculas');
    }
};
