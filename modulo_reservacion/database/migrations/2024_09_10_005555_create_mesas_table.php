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
        Schema::create('mesas', function (Blueprint $table) {
            $table->integer('idMesas', true);
            $table->integer('numero_mesa');
            $table->integer('capacidad_personas');
            $table->boolean('disponibilidad');
            $table->integer('Salones_idSalones')->index('mesas_ibfk_1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mesas');
    }
};
