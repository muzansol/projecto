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
        Schema::create('producaos', function (Blueprint $table) {
            $table->id();
            $table->double('area');
            $table->double('ec');
            $table->double('ee');
            $table->double('ve');
            $table->double('vc');
            $table->double('diluicacao');
            $table->double('empolamento');
            $table->double('preparacao_previa');
            $table->double('producacao_ve');
            $table->double('producacao_vc');
            $table->double('grao');
            $table->double('concentrado');
            $table->double('quilates');
            $table->double('teor');
            $table->double('pedra');
            $table->double('tamanho_pedra');
            $table->double('pedra_maior');
            $table->double('sr');
            
            $table->unsignedBigInteger('id_bloco');
            $table->foreign('id_bloco')->references('id')->on('blocos')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producaos');
    }
};
