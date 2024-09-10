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
        Schema::create('cargosempleados', function (Blueprint $table) {
            $table->integer('idCargosEmpleados', true);
            $table->string('cargo', 145);
            $table->string('descripcion', 745);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cargosempleados');
    }
};
