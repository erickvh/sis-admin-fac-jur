<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Materias', function (Blueprint $table) {
            $table->increments('id');
            $table->char('codigoMateria', 7)->unique();
            $table->string('nombreMateria', 80);

            $table->integer('carreraId')->unsigned();
            $table->foreign('carreraId')->references('id')->on('Carreras');
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
        Schema::dropIfExists('Materias');
    }
}
