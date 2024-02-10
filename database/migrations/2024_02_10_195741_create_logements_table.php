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
        Schema::create('logements', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('bloc');
            $table->string('porte');
            $table->string('etat');
            $table->string('motif');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logements');
    }
};
