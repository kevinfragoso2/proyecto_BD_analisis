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
        Schema::table('empleados', function (Blueprint $table) {
            $table->foreign(['Personas_idPersonas'], 'empleados_ibfk_1')->references(['idPersonas'])->on('personas')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['CargosEmpleados_idCargosEmpleados'], 'empleados_ibfk_2')->references(['idCargosEmpleados'])->on('cargosempleados')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('empleados', function (Blueprint $table) {
            $table->dropForeign('empleados_ibfk_1');
            $table->dropForeign('empleados_ibfk_2');
        });
    }
};
