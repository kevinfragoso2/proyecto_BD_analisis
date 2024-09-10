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
        Schema::create('empleados', function (Blueprint $table) {
            $table->integer('idEmpleados', true);
            $table->date('fecha_ingreso');
            $table->date('fecha_egreso')->nullable();
            $table->integer('Personas_idPersonas')->index('empleados_ibfk_1');
            $table->integer('CargosEmpleados_idCargosEmpleados')->index('empleados_ibfk_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
