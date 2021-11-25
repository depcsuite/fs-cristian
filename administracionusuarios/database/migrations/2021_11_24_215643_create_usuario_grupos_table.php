<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_grupos', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_usuario_id');
            $table->unsignedBigInteger('fk_grupo_id');
            $table->foreign('fk_usuario_id')->references('id')->on('usuarios');
            $table->foreign('fk_grupo_id')->references('id')->on('grupos');
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
        Schema::dropIfExists('usuario_grupos');
    }
}
