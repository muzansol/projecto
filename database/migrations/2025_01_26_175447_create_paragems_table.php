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
        Schema::create('paragems', function (Blueprint $table) {
            $table->id();
            $table->time('hora_inicio');
            $table->time('hora_fim');
            $table->time('total_hora');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_equip');
            $table->foreign('id_equip')->references('id')->on('equipamentos')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('id_paragem');
            $table->foreign('id_paragem')->references('id')->on('tipo_paralizacaos')->onDelete('cascade')->onUpdate('cascade');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.   ID_PARAL,hora_inicio, hora_fim, total_hora, , ID_USER, ID_EQUIP, DATA, ID_ PARAGEM
     */
    public function down(): void
    {
        Schema::dropIfExists('paragems');
    }
};
