<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Personas', function (Blueprint $table) {
            $table->increments('id');
            $table->char('carnet', 7)->nullable();
            $table->char('dui', 10)->nullable();
            $table->string('nombre', 60);
            $table->string('apellido', 60);
            $table->boolean('becado')->default(0);
            $table->date('fechaNacimiento');
            $table->char('sexo', 1);

            $table->integer('carreraId')->unsigned()->nullable();
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
        Schema::dropIfExists('Personas');
    }
}
