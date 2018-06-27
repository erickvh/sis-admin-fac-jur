<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DetalleSolicituds', function (Blueprint $table) {
            $table->increments('id');
            $table->char('ciclo', 1);
            $table->integer('anio');
            $table->date('fechaInicio');
            $table->date('fechaFinalizacion');
            $table->text('justificacion');
            $table->char('telefono', 9);
            $table->string('nombreJefeProSocial', 75);
            $table->integer('nivelAcademicaActual');
            $table->integer('nivelAcademicaAspira');

            $table->integer('solicitudId')->unsigned();
            $table->foreign('solicitudId')->references('id')->on('Solicituds');
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
        Schema::dropIfExists('DetalleSolicituds');
    }
}
