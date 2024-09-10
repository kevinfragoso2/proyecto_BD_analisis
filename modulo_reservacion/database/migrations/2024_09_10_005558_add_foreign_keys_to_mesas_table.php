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
        Schema::table('mesas', function (Blueprint $table) {
            $table->foreign(['Salones_idSalones'], 'mesas_ibfk_1')->references(['idSalones'])->on('salones')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mesas', function (Blueprint $table) {
            $table->dropForeign('mesas_ibfk_1');
        });
    }
};
