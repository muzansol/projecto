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
        Schema::create('equipamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('numero_serie');
            $table->string('modelo');
            $table->string('matricula');
            $table->string('ano_fabrico');
            $table->string('capacidade');
            $table->string('estado');
            $table->string('imagem');
            $table->unsignedBigInteger('id_categoria'); // Precisa ser compatível com a chave primária em `categorias`

            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipamentos');
    }
};
