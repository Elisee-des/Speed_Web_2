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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom_prenom');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('telephone')->nullable();
            $table->string('ine')->nullable();
            $table->string('password');
            $table->string('promotion')->nullable();
            $table->string('ufr')->nullable();
            $table->string('compte_delegue')->nullable();
            $table->string('niveau_licence')->nullable();
            $table->foreignUuid('filiere_id')->nullable()->references('id')->on('filieres');
            $table->foreignId('gestionnaire_id')->nullable()->references('id')->on('users')->onDelete('set null');
            $table->foreignId('delegue_id')->nullable()->references('id')->on('users')->onDelete('set null');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
