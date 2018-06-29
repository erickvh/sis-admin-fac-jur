<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleSolicitudMateria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DetalleSolicitudMateria', function (Blueprint $table) {
            $table->increments('id');
            $table->char('grupoActual', 4);
            $table->char('grupoDeseado', 4);
            $table->integer('matricula')->nullable();

            $table->integer('materiaId')->unsigned();
            $table->foreign('materiaId')->references('id')->on('Materias');

            $table->integer('detalleSolicitudId')->unsigned();
            $table->foreign('detalleSolicitudId')->references('id')->on('DetalleSolicituds');
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
        Schema::dropIfExists('DetalleSolicitudMateria');
    }
}
