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
        Schema::create('inscription', function (Blueprint $table) {
            $table->foreignId('Idetud')->constrained('etudiants');
            $table->foreignId('Idlog')->constrained('logements');
            $table->string('anne');
            $table->date('dateinscrit');
            $table->string('niveau');
            $table->primary(['Idetud', 'Idlog']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscription');
    }
};
