<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
            'nombreUsuario'=>'Marvin Martinez',
            'email'=>'aa12345@ues.edu.sv',
            'password'=>bcrypt('holamundo'),
            'habilitado'=>true,
            'token'=>'asasadasfasfasfasa',
            'remember_token'=>'asafafafasfas',
            'personaId'=>'1'
            ]
            );

            User::create(
                [
                'nombreUsuario'=>'Marvin Alejandro',
                'email'=>'aa54321@ues.edu.sv',
                'password'=>bcrypt('holamundo'),
                'habilitado'=>true,
                'token'=>'asasadasfasfasfasa',
                'remember_token'=>'asafafafasfas',
                'personaId'=>'2'
                ]
                );
    }
}
