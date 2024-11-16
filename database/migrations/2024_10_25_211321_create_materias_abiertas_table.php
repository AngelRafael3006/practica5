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
        Schema::create('materias_abiertas', function (Blueprint $table) {
            $table->id();
            $table->string('materia_id');
            $table->string('periodo_id');
            $table->string('carrera_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materias_abiertas');
    }//mcxss
};
