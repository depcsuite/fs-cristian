<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_familias', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_usuario_id');
            $table->unsignedBigInteger('fk_familia_id');
            $table->foreign('fk_usuario_id')->references('id')->on('usuarios');
            $table->foreign('fk_familia_id')->references('id')->on('familias');
            $table->integer('predeterminado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_familias');
    }
}
