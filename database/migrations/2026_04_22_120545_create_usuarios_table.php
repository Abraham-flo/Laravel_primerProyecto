<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('usuarios', function (Illuminate\Database\Schema\Blueprint $table) {
            $table->id(); // Crea una ID autoincrementable
            $table->string('nombre'); // Columna para el nombre
            $table->integer('edad'); // Columna para la edad
            $table->string('ocupacion'); // Columna para la ocupación
            $table->string('mensaje'); // Guardaremos también el resultado de la lógica
            $table->timestamps(); // Crea las columnas created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
