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
            $table->uuid("id")->primary();
            $table->string('nom');
            $table->mediumText('path');
            $table->foreignId('user_id')->nullable()->references('id')->on('users');
            $table->foreignUuid('affiche_id')->nullable()->references('id')->on('affiches')->cascadeOnDelete();
            $table->foreignUuid('universite_id')->nullable()->references('id')->on('universites')->cascadeOnDelete();
            $table->foreignUuid('filiere_id')->nullable()->references('id')->on('filieres')->cascadeOnDelete();
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
