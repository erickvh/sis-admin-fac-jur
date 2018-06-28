<?php

use App\Materia;
use App\Carrera;
use Illuminate\Database\Seeder;

class MateriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carreras = Carrera::all();
        foreach ($carreras as $carrera)
        {
            if($carrera->codigoCarrera == 'L10201') {
                Materia::create([
                    'codigoMateria' =>  'ICP112',
                    'nombreMateria' =>  'Introducción a las Ciencias Políticas',
                    'carreraId'     =>  $carrera->id,
                ]);
                Materia::create([
                  'codigoMateria' =>  'IED112',
                  'nombreMateria' =>  'Introducción al Estudio del Derecho I',
                  'carreraId'     =>  $carrera->id,
                ]);
                Materia::create([
                  'codigoMateria' =>  'ISO112',
                  'nombreMateria' =>  'Introducción a la Investigación Social I',
                  'carreraId'     =>  $carrera->id,
                ]);
                Materia::create([
                  'codigoMateria' =>  'PDF112',
                  'nombreMateria' =>  'Principios de Filosofía',
                  'carreraId'     =>  $carrera->id,
                ]);
                Materia::create([
                  'codigoMateria' =>  'SYE112',
                  'nombreMateria' =>  'Sociedad y Economía',
                  'carreraId'     =>  $carrera->id,
                ]);
                Materia::create([
                  'codigoMateria' =>  'EJU112',
                  'nombreMateria' =>  'Ética Jurídica',
                  'carreraId'     =>  $carrera->id,
                ]);
                Materia::create([
                  'codigoMateria' =>  'FSE112',
                  'nombreMateria' =>  'Fundamentos Sociológicos y Económicos del Derecho',
                  'carreraId'     =>  $carrera->id,
                ]);
                Materia::create([
                  'codigoMateria' =>  'IED212',
                  'nombreMateria' =>  'Introducción al Estudio del Derecho II',
                  'carreraId'     =>  $carrera->id,
                ]);
                Materia::create([
                  'codigoMateria' =>  'ISO212',
                  'nombreMateria' =>  'Introducción a la Investigación Social II',
                  'carreraId'     =>  $carrera->id,
                ]);
                Materia::create([
                  'codigoMateria' =>  'TES112',
                  'nombreMateria' =>  'Teoría del Estado',
                  'carreraId'     =>  $carrera->id,
                ]);
            }elseif ($carrera->codigoCarrera == 'L10202'){
                Materia::create([
                  'codigoMateria' =>  'FEI112',
                  'nombreMateria' =>  'Fundamentos de Economía I',
                  'carreraId'     =>  $carrera->id,
                ]);
                Materia::create([
                  'codigoMateria' =>  'FGD112',
                  'nombreMateria' =>  'Fundamentos Generales del Derecho',
                  'carreraId'     =>  $carrera->id,
                ]);
                Materia::create([
                  'codigoMateria' =>  'IIS112',
                  'nombreMateria' =>  'Introducción a la Investigación Social',
                  'carreraId'     =>  $carrera->id,
                ]);
                Materia::create([
                  'codigoMateria' =>  'ITS112',
                  'nombreMateria' =>  'Introducción a la Teoría Social',
                  'carreraId'     =>  $carrera->id,
                ]);
                Materia::create([
                  'codigoMateria' =>  'TPP112',
                  'nombreMateria' =>  'Teoría y Pensamiento Político',
                  'carreraId'     =>  $carrera->id,
                ]);
                Materia::create([
                  'codigoMateria' =>  'CUN112',
                  'nombreMateria' =>  'Cultura e Identidad Nacional',
                  'carreraId'     =>  $carrera->id,
                ]);
                Materia::create([
                  'codigoMateria' =>  'FEI212',
                  'nombreMateria' =>  'Fundamentos de Economía II',
                  'carreraId'     =>  $carrera->id,
                ]);
                Materia::create([
                  'codigoMateria' =>  'IRL112',
                  'nombreMateria' =>  'Introducción a las Relaciones Internacionales',
                  'carreraId'     =>  $carrera->id,
                ]);
                Materia::create([
                  'codigoMateria' =>  'MYT112',
                  'nombreMateria' =>  'Métodos y Técnicas de Investigación',
                  'carreraId'     =>  $carrera->id,
                ]);
                Materia::create([
                  'codigoMateria' =>  'SCS112',
                  'nombreMateria' =>  'Sistema Constitucional Salvadoreño',
                  'carreraId'     =>  $carrera->id,
                ]);
            }
        }
    }
}
