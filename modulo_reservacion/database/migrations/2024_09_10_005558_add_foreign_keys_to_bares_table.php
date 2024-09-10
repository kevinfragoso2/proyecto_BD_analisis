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
        Schema::table('bares', function (Blueprint $table) {
            $table->foreign(['Espacios_idEspacios'], 'bares_ibfk_1')->references(['idEspacios'])->on('espacios')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['Salones_idSalones'], 'bares_ibfk_2')->references(['idSalones'])->on('salones')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bares', function (Blueprint $table) {
            $table->dropForeign('bares_ibfk_1');
            $table->dropForeign('bares_ibfk_2');
        });
    }
};
