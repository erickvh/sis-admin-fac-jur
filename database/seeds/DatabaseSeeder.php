<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CarrerasTableSeeder::class);
        $this->call(MateriasTableSeeder::class);
        $this->call(EstadosTableSeeder::class);
        $this->call(TipoSolicitudesTableSeeder::class);
        $this->call(PersonaTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        $this->call(SolicitudTableSeeder::class);

        
    }
}
