<?php

use App\Estado;
use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estado::create([
          'nombreEstado'    =>  'Aun no se ha revisado',
        ]);
    }
}
