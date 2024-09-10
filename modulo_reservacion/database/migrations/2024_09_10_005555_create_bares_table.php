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
        Schema::create('bares', function (Blueprint $table) {
            $table->integer('idBares', true);
            $table->string('nombre_bartender', 145);
            $table->integer('Espacios_idEspacios')->index('bares_ibfk_1');
            $table->integer('Salones_idSalones')->index('bares_ibfk_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bares');
    }
};
