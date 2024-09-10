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
        Schema::create('espacios_has_empleados', function (Blueprint $table) {
            $table->integer('idEspacios_has_Empleados', true);
            $table->integer('Espacios_idEspacios')->index('espacios_has_empleados_ibfk_1');
            $table->integer('Empleados_idEmpleados')->index('espacios_has_empleados_ibfk_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('espacios_has_empleados');
    }
};
