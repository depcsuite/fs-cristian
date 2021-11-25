<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatenteFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patente_familias', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_patente_id');
            $table->unsignedBigInteger('fk_familia_id');
            $table->foreign('fk_patente_id')->references('id')->on('patentes');
            $table->foreign('fk_familia_id')->references('id')->on('familias');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patente_familias');
    }
}
