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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('im');
            $table->string('nometu');
            $table->string('prenometu');
            $table->date('datenaissance');
            $table->string('cin');
            $table->string('sexe');
            $table->string('telephone');
            $table->string('image');
            $table->foreignId('Idass')->constrained('associations');
            $table->foreignId('Ideta')->constrained('etablissements');
            $table->string('profession');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
