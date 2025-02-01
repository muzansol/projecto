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
        Schema::create('planos', function (Blueprint $table) {
            $table->id();
            $table->double('v_e');
            $table->double('v_c');
            $table->double('quilates');
            $table->double('tior');
            $table->double('racio');
            $table->double('preco');
            $table->double('receita_prevista');

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
        Schema::dropIfExists('planos');
    }
};
