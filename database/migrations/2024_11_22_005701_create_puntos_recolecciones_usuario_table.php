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
        Schema::create('recolecciones_usuario', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->string('dia');
            $table->string('hora');
            $table->decimal('cantidad', 8, 2);
            $table->string('estado')->default('pendiente');
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('punto_recoleccion_id');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('punto_recoleccion_id')->references('id')->on('puntos_recoleccion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recolecciones_usuario');
    }
};
