<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * POÇOS_RECOLHIDOS(id_PR, data,diluicao,id_user, id_poço, empolamento, tipo_rocha, tipo_deposito
     */
    public function up(): void
    {
        Schema::create('recolha_pocos', function (Blueprint $table) {
            $table->id();
            $table->string('diluicao');
            $table->double('empolamento');
            $table->string('tipo_rocha');
            $table->string('tipo_deposito');
            $table->double('ee');//espessura esteril
            $table->double('ec');//espessura cascalho
            $table->double('ve');//volume esteril
            $table->double('vc');//volume cascalho
            $table->double('area');
            $table->unsignedBigInteger('id_poco');
            $table->foreign('id_poco')->references('id')->on('pocos')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recolha_pocos');
    }
};
