<?php

use App\Carrera;
use Illuminate\Database\Seeder;

class CarrerasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carrera::create([
            'codigoCarrera' =>  'L10201',
            'nombreCarrera' =>  'Licenciatura en Ciencias Jurídicas',
        ]);

        Carrera::create([
            'codigoCarrera' =>  'L10202',
            'nombreCarrera' =>  'Licenciatura en Relaciones Internacionales',
        ]);
    }
}
