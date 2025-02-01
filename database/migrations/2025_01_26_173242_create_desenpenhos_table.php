<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Disponibilidade,  hora_inicio, hora_fim, total_hora, , ID_USER, ID_EQUIP, ID_ TRABALHO
     */
    public function up(): void
    {
        Schema::create('desenpenhos', function (Blueprint $table) {
            $table->id();
            $table->string('disponibilidade');
            $table->time('hora_inicio');
            $table->time('hora_fim');
            $table->time('total_hora');
            
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('id_equip');
            $table->foreign('id_equip')->references('id')->on('equipamentos')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('id_trabalho');
            $table->foreign('id_trabalho')->references('id')->on('tipo_trabalhos')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desenpenhos');
    }
};
