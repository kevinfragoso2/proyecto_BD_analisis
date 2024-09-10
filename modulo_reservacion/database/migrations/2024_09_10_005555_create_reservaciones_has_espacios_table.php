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
        Schema::create('reservaciones_has_espacios', function (Blueprint $table) {
            $table->integer('idReservaciones_has_Espacios', true);
            $table->integer('cantidad_mesas');
            $table->integer('Reservaciones_idReservaciones')->index('reservaciones_has_espacios_ibfk_1');
            $table->integer('Espacios_idEspacios')->index('reservaciones_has_espacios_ibfk_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservaciones_has_espacios');
    }
};
