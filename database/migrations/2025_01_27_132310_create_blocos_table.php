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
        Schema::create('blocos', function (Blueprint $table) {
            $table->id();
            $table->double('latitude');
            $table->double('longitude');
            $table->double('area');
            $table->double('e_e');
            $table->double('e_c');
            $table->double('v_e');
            $table->double('v_c');
            $table->double('quilates');
            $table->double('teor');
            $table->double('tamanho_pedra');
            $table->double('racio');
            $table->double('preço');

            $table->unsignedBigInteger('id_sector');
            $table->foreign('id_sector')->references('id')->on('sectors')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blocos');
    }
};
