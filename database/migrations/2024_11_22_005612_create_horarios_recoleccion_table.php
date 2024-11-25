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
        Schema::create('horarios_recoleccion', function (Blueprint $table) {
            $table->id();
            $table->string('hora_inicio');
            $table->string('hora_fin');
            $table->string('dia');
            $table->unsignedBigInteger('id_punto_recoleccion');
            $table->foreign('id_punto_recoleccion')->references('id')->on('puntos_recoleccion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarios_recoleccion');
    }
};
