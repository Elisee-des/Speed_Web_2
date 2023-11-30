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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->mediumText('path');
            $table->foreignId('user_id')->nullable()->references('id')->on('users');
            $table->foreignId('resultat_id')->nullable()->references('id')->on('resultats')->cascadeOnDelete();
            $table->foreignId('proclamations_id')->nullable()->references('id')->on('proclamations');
            $table->foreignId('deliberation_id')->nullable()->references('id')->on('deleiberations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
