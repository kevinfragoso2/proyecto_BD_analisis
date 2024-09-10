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
        Schema::create('salones', function (Blueprint $table) {
            $table->integer('idSalones', true);
            $table->string('Estado', 145);
            $table->integer('Espacios_idEspacios')->index('salones_ibfk_1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salones');
    }
};
