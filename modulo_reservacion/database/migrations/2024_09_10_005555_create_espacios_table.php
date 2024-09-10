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
        Schema::create('espacios', function (Blueprint $table) {
            $table->integer('idEspacios', true);
            $table->string('nombre', 145);
            $table->integer('capacidad_personas');
            $table->string('ubicacion_restaurante', 545);
            $table->boolean('disponibilidad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('espacios');
    }
};
