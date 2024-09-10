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
        Schema::create('reservaciones', function (Blueprint $table) {
            $table->integer('idReservaciones', true);
            $table->date('fecha_actual');
            $table->date('fecha_reservacion');
            $table->time('hora_reservacion', 2);
            $table->integer('num_personas');
            $table->string('informacion', 1045)->nullable();
            $table->boolean('estatus');
            $table->string('motivo', 845)->nullable();
            $table->integer('Clientes_idClientes')->index('reservaciones_ibfk_1');
            $table->integer('Empleados_idEmpleados')->index('reservaciones_ibfk_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservaciones');
    }
};
