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
        Schema::create('affiches', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('niveau_etude')->nullable();
            $table->string('session')->nullable();
            $table->boolean('actif')->default(false);
            $table->foreignId('caracteristique_id')->references('id')->on('caracteristiques');
            $table->foreignId('semestre_id')->references('id')->on('semestres');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affiches');
    }
};
