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
        Schema::create('personas', function (Blueprint $table) {
            $table->integer('idPersonas', true);
            $table->integer('cedula');
            $table->string('nombre', 145);
            $table->string('apellido', 145);
            $table->date('fecha_nacimiento')->nullable();
            $table->string('correo', 245);
            $table->integer('telefono');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
