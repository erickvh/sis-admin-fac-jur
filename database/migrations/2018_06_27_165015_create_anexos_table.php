<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnexosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Anexos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreOriginal', 75);
            $table->string('ruta', '250');

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
        Schema::dropIfExists('Anexos');
    }
}
