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
        Schema::table('reservaciones_has_espacios', function (Blueprint $table) {
            $table->foreign(['Reservaciones_idReservaciones'], 'reservaciones_has_espacios_ibfk_1')->references(['idReservaciones'])->on('reservaciones')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['Espacios_idEspacios'], 'reservaciones_has_espacios_ibfk_2')->references(['idEspacios'])->on('espacios')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservaciones_has_espacios', function (Blueprint $table) {
            $table->dropForeign('reservaciones_has_espacios_ibfk_1');
            $table->dropForeign('reservaciones_has_espacios_ibfk_2');
        });
    }
};
