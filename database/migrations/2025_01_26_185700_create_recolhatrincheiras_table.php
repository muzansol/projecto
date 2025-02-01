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
        Schema::create('recolhatrincheiras', function (Blueprint $table) {
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
            $table->unsignedBigInteger('id_trincheira');
            $table->foreign('id_trincheira')->references('id')->on('trincheiras')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('recolhatrincheiras');
    }
};
