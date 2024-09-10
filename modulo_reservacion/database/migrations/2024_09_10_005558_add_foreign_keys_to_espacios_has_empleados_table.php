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
        Schema::table('espacios_has_empleados', function (Blueprint $table) {
            $table->foreign(['Espacios_idEspacios'], 'espacios_has_empleados_ibfk_1')->references(['idEspacios'])->on('espacios')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['Empleados_idEmpleados'], 'espacios_has_empleados_ibfk_2')->references(['idEmpleados'])->on('empleados')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('espacios_has_empleados', function (Blueprint $table) {
            $table->dropForeign('espacios_has_empleados_ibfk_1');
            $table->dropForeign('espacios_has_empleados_ibfk_2');
        });
    }
};
