<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Solicituds', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('estadoId')->unsigned();
            $table->foreign('estadoId')->references('id')->on('Estados');

            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('users');

            $table->integer('tipoSolicitudId')->unsigned();
            $table->foreign('tipoSolicitudId')->references('id')->on('TipoSolicituds');
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
        Schema::dropIfExists('Solicituds');
    }
}
