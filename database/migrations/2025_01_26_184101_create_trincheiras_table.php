<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**   id_trincheira,estado, longitude, latitude,id_setor
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trincheiras', function (Blueprint $table) {
            $table->id();
            $table->integer('nome');
            $table->integer('estado');
            $table->double('latitude');
            $table->double('longitude');

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
        Schema::dropIfExists('trincheiras');
    }
};
