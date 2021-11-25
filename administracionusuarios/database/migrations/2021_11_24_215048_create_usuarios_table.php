<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('usuario', 100);
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->string('email')->unique();
            $table->string('clave', 100);
            $table->integer('activo');
            $table->integer('root');
            $table->unsignedBigInteger('fk_grupo_id');
            $table->foreign('fk_grupo_id')->references('id')->on('grupos');
            $table->integer('ultimo_ingreso')->timestamp()->nullable();
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
        Schema::dropIfExists('usuarios');
    }
}
