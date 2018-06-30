<?php

use App\Persona;
use App\User;
use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;
use Caffeinated\Shinobi\Models\Role;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $estudiante = Role::create([
            'name'  => 'Estudiante',
            'slug'  => 'estudiante',
        ]);
        $docente = Role::create([
            'name'  => 'Docente',
            'slug'  => 'docente',
        ]);
        $administradores = Role::create([
            'name'  => 'Administradores',
            'slug'  => 'administracion',
        ]);
        $otros = Role::create([
            'name'  => 'Otros Usuarios',
            'slug'  => 'otros',
        ]);
        //---------------------------------
        $p1 = Persona::create([
            'carnet'=>'ah13019',
            'nombre'=>'Marvin',
            'apellido'=>'Martinez',
            'becado'=>false,
            'fechaNacimiento'=>'2000-01-01',
            'sexo'=>'m',
            'carreraId'=>1,
        ]);
        $p2 = Persona::create([
            'nombre'=>'Erick',
            'apellido'=>'Juan',
            'dui' => '02927483-0',
            'fechaNacimiento'=>'2000-01-01',
            'sexo'=>'m',
        ]);
        $p3 = Persona::create([
            'nombre'=>'Andrea',
            'apellido'=>'Alvarenga',
            'dui' => '02927483-0',
            'fechaNacimiento'=>'2000-01-01',
            'sexo'=>'f',
        ]);
        $p4 = Persona::create([
            'nombre'=>'Elsy',
            'apellido'=>'Alvarenga',
            'dui' => '02927483-0',
            'fechaNacimiento'=>'2000-01-01',
            'sexo'=>'f',
        ]);

        $u1 = User::create([
            'email'=>'ah13019@ues.edu.sv',
            'password'=>bcrypt('holamundo'),
            'habilitado'=>true,
            'token'=>'asasadasfasfasfasa',
            'remember_token'=>'asafafafasfas',
            'personaId'=> $p1->id,
            ]
        )->assignRole($estudiante->id);
        $u2 = User::create([
                'email'=>'docente@docente.com',
                'password'=>bcrypt('holamundo'),
                'habilitado'=>true,
                'token'=>'asasadasfasfasfasa',
                'remember_token'=>'asafafafasfas',
                'personaId'=> $p2->id,
            ]
        )->assignRole($docente->id);
        $u3 = User::create([
                'email'=>'administrador@administrador.com',
                'password'=>bcrypt('holamundo'),
                'habilitado'=>true,
                'token'=>'asasadasfasfasfasa',
                'remember_token'=>'asafafafasfas',
                'personaId'=> $p3->id,
            ]
        )->assignRole($administradores->id);
        $u4 = User::create([
                'email'=>'otro@otro.com',
                'password'=>bcrypt('holamundo'),
                'habilitado'=>true,
                'token'=>'asasadasfasfasfasa',
                'remember_token'=>'asafafafasfas',
                'personaId'=> $p4->id,
            ]
        )->assignRole($otros->id);
        //---------------------------------

        Permission::create([
            'name'          => 'Base Estudiantes',
            'slug'          => 'estudiante',
            'description'   => 'La base de un estudiante',
        ])->assignRole($estudiante->id);

        Permission::create([
            'name'          => 'Cambiar de grupo',
            'slug'          => 'cambio-grupo.crear',
            'description'   => 'Solicitar cambio de grupo de un estudiante',
        ])->assignRole($estudiante->id);

        Permission::create([
            'name'          => 'Crear una denuncia',
            'slug'          => 'denuncia.crear',
            'description'   => 'Permite enviar una denuncia al estudiante',
        ])->assignRole($estudiante->id);
        Permission::create([
            'name'          => 'Instribir extemporaneo',
            'slug'          => 'inscripcion-extemporanea.crear',
            'description'   => 'Permiso solicitar inscribirse de manera extemporanea',
        ])->assignRole($estudiante->id);
        Permission::create([
            'name'          => 'Presentar Solicitud de Memoria del servicio social',
            'slug'          => 'memoria-social.crear',
            'description'   => 'Perdir memoria de servicio social',
        ])->assignRole($estudiante->id);
        Permission::create([
            'name'          => 'Peticiones especiales',
            'slug'          => 'especiales.crear',
            'description'   => 'Hacer una peticion especial',
        ])->assignRole($estudiante->id);
        Permission::create([
            'name'          => 'Prorroga egresado',
            'slug'          => 'prorroga.crear',
            'description'   => 'Pedir una prorroga para egresado',
        ])->assignRole($estudiante->id);
        Permission::create([
            'name'          => 'Retiro de ciclo',
            'slug'          => 'retiro-ciclo.crear',
            'description'   => 'Solicitar el retiro de ciclo completo',
        ])->assignRole($estudiante->id);
        Permission::create([
            'name'          => 'Retirar materia',
            'slug'          => 'retiro-materia.crear',
            'description'   => 'Solicita retirar una materia',
        ])->assignRole($estudiante->id);
        Permission::create([
            'name'          => 'Todas las peticiones realizadas',
            'slug'          => 'consulta-estudiante',
            'description'   => 'Listar todas las peticiones',
        ])->assignRole($estudiante->id);
        Permission::create([
            'name'          => 'Mostrar detalle peticion',
            'slug'          => 'consulta-estudiante.show',
            'description'   => 'Muestra una peticion en particular',
        ])->assignRole($estudiante->id);

        //--------------------------------------------
        Permission::create([
            'name'          => 'Base Docentes',
            'slug'          => 'docente',
            'description'   => 'La base de un docente',
        ])->assignRole($docente->id);
        Permission::create([
            'name'          => 'Incapacidad',
            'slug'          => 'licencia.crear',
            'description'   => 'Solicitar licencia por incapacidad',
        ])->assignRole($docente->id);
        Permission::create([
            'name'          => 'Mision oficial',
            'slug'          => 'mision-oficial.crear',
            'description'   => 'Pedir una mision oficial por un docente',
        ])->assignRole($docente->id);
        Permission::create([
            'name'          => 'Denuncia contra estudiantes',
            'slug'          => 'denuncias.crear',
            'description'   => 'Permite denunciar a un estudiante',
        ])->assignRole($docente->id);
        Permission::create([
            'name'          => 'Reclacificacion de docente',
            'slug'          => 'reclasificacion.crear',
            'description'   => 'Pedir ser promovido o reclasificado',
        ])->assignRole($docente->id);
        Permission::create([
            'name'          => 'Una peticion especial',
            'slug'          => 'peticiones-especiales.crear',
            'description'   => 'Permite hacer peticiones fuera de lo programado',
        ])->assignRole($docente->id);
        Permission::create([
            'name'          => 'Listar Peticiones Docente',
            'slug'          => 'consulta-docente',
            'description'   => 'Permite ver todas las solicitudes hechas por un docente',
        ])->assignRole($docente->id);
        Permission::create([
            'name'          => 'Detalle de una solicitud',
            'slug'          => 'consulta-docente.show',
            'description'   => 'Muestra una solicitud especifica de un docente',
        ])->assignRole($docente->id);

        //---------------------------------------------
        Permission::create([
            'name'          => 'Base Administradores',
            'slug'          => 'administracion',
            'description'   => 'Permite a los administradores consultas las peticiones',
        ])->assignRole($administradores->id);
        Permission::create([
            'name'          => 'Registrar un usuario',
            'slug'          => 'registo.crear',
            'description'   => 'Permite a los administradores consultas las peticiones',
        ])->assignRole($administradores->id);
        Permission::create([
            'name'          => 'Listar peticiones docentes',
            'slug'          => 'admin-docente',
            'description'   => 'Listar las peticiones docentes',
        ])->assignRole($administradores->id);
        Permission::create([
            'name'          => 'Detalle de una peticion',
            'slug'          => 'admin-docente.show',
            'description'   => 'Detalle peticion de un docente',
        ])->assignRole($administradores->id);
        Permission::create([
            'name'          => 'Peticiones estudiantiles',
            'slug'          => 'admin-estudiante',
            'description'   => 'Permite mostrar las peticiones de estudiantes',
        ])->assignRole($administradores->id);
        Permission::create([
            'name'          => 'Detalle de una peticion estudiantil',
            'slug'          => 'admin-estudiante.show',
            'description'   => 'Mostrar el detalle de una peticion de un estudiante',
        ])->assignRole($administradores->id);
        Permission::create([
            'name'          => 'Listar Peticiones extenas',
            'slug'          => 'admin-otros',
            'description'   => 'Lista de peticiones de personas externas a la facultad',
        ])->assignRole($administradores->id);
        Permission::create([
            'name'          => 'Detalle de una peticion externa',
            'slug'          => 'admin-otros.show',
            'description'   => 'Mostrar el detalle de una peticion externa',
        ])->assignRole($administradores->id);
        //------------------------------------------
        Permission::create([
            'name'          => 'Base Otros',
            'slug'          => 'otros',
            'description'   => 'Personas externas pueden hacer peticiones',
        ])->assignRole($otros->id);
        Permission::create([
            'name'          => 'Realizar una peticion (externo)',
            'slug'          => 'peticion.crear',
            'description'   => 'Personas externas pueden hacer peticiones',
        ])->assignRole($otros->id);
        Permission::create([
            'name'          => 'Consultar Peticiones (externo)',
            'slug'          => 'consulta-otros',
            'description'   => 'Un expeterno puede consultar sus peticiones',
        ])->assignRole($otros->id);
        Permission::create([
            'name'          => 'Detalle de peticion (externo)',
            'slug'          => 'consulta-otros.show',
            'description'   => 'Un externo puede consultar una peticion',
        ])->assignRole($otros->id);
    }
}
