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
            $table->char('ciclo', 1)->nullable();
            $table->integer('anio')->nullable();
            $table->date('fechaInicio')->nullable();
            $table->date('fechaFinalizacion')->nullable();
            $table->text('justificacion')->nullable();
            $table->char('telefono', 9)->nullable();
            $table->string('nombreJefeProSocial', 75)->nullable();
            $table->integer('nivelAcademicaActual')->nullable();
            $table->integer('nivelAcademicaAspira')->nullable();

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
