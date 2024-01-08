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
        Schema::create('filieres', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nom');
            $table->string('sigle')->nullable();
            $table->timestamps();
            $table->foreignUuid('universite_id')->nullable()->references('id')->on('universites')->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filieres');
    }
};
