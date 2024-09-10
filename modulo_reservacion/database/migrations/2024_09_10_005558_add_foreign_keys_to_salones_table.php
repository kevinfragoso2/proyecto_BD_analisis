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
        Schema::table('salones', function (Blueprint $table) {
            $table->foreign(['Espacios_idEspacios'], 'salones_ibfk_1')->references(['idEspacios'])->on('espacios')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('salones', function (Blueprint $table) {
            $table->dropForeign('salones_ibfk_1');
        });
    }
};
