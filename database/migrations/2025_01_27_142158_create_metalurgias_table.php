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
        Schema::create('metalurgias', function (Blueprint $table) {
            $table->id();
            $table->double('vmi');//volume mineiro 
            $table->double('vmt');//volume mineiro
            $table->double('stock');
            $table->double('total');
            $table->double('num pedra');
            $table->double('teor');
            $table->double('tamanho');
            $table->double('pedra maior');
            $table->unsignedBigInteger('id_bloco');
            $table->foreign('id_bloco')->references('id')->on('blocos')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
        Schema::create('metalurgias_produto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_metalurgias');
            $table->foreign('id_metalurgias')->references('id')->on('metalurgias')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metalurgias');
    }
};
