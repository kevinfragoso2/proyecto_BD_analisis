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
        Schema::table('reservaciones', function (Blueprint $table) {
            $table->foreign(['Clientes_idClientes'], 'reservaciones_ibfk_1')->references(['idClientes'])->on('clientes')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['Empleados_idEmpleados'], 'reservaciones_ibfk_2')->references(['idEmpleados'])->on('empleados')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservaciones', function (Blueprint $table) {
            $table->dropForeign('reservaciones_ibfk_1');
            $table->dropForeign('reservaciones_ibfk_2');
        });
    }
};
