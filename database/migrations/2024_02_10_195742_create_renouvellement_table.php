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
        Schema::create('renouvellement', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Idetud')->constrained('etudiants');
            $table->foreignId('Id_logement')->constrained('logements');
            $table->string('anne');
            $table->date('date_renouvellement');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renouvellement');
    }
};
