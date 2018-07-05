<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('register/confirm/{token}','Auth\RegisterController@confirmEmail');
Route::get('registers/confirm/{token}','Auth\RegisterController@confirmEmails');
Route::post('registers/confirm', 'Auth\RegisterController@confirmEmailss')->name('registers.confirm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function (){


/**
 *                              RUTAS DE NO REGISTRADOS
 */


 /**
 *                              RUTAS DE ESTUDIANTE
 */


Route::group(["prefix"=>"estudiante"],function() {
    Route::get('/',function(){
        return view('estudiante.principal');
    })->name('estudiante')->middleware('permission:estudiante');
 /**
 * Rutas cambio grupo
 */
    Route::get('cambio-grupo/crear','SolicitudEstudianteController@cambioGrupoCrear')
    ->name('cambio-grupo.crear')->middleware('permission:cambio-grupo.crear');

    Route::post('cambio-grupo','SolicitudEstudianteController@cambioGrupoStore')
    ->name('cambio-grupo.store')->middleware('permission:cambio-grupo.crear');
/**
 * Rutas denuncias
 */
    Route::get('denuncia/crear','SolicitudEstudianteController@denunciaCrear')
    ->name('denuncia.crear')->middleware('permission:denuncia.crear');
    Route::post('denuncia','SolicitudEstudianteController@denunciaStore')
    ->name('denuncia.store')->middleware('permission:denuncia.crear');
/**
 * Rutas incripcion extemporanea
 */
    Route::get('inscripcion-extemporanea/crear','SolicitudEstudianteController@inscripcionCrear')
    ->name('inscripcion-extemporanea.crear')->middleware('permission:inscripcion-extemporanea.crear');

    Route::post('inscripcion-extemporanea','SolicitudEstudianteController@inscripcionStore')
    ->name('inscripcion-extemporanea.store')->middleware('permission:inscripcion-extemporanea.crear');
/**
 * Rutas  memoria servicio social
 */
    Route::get('memoria-s-social/crear','SolicitudEstudianteController@memoriaSocialCrear')
    ->name('memoria-social.crear')->middleware('permission:memoria-social.crear');

    Route::post('memoria-s-social','SolicitudEstudianteController@memoriaSocialStore')
    ->name('memoria-social.store')->middleware('permission:memoria-social.crear');

/**
 * Rutas peticiones especiales
 */
    Route::get('peticiones-especiales/crear','SolicitudEstudianteController@peticionEspecialCrear')
    ->name('especiales.crear')->middleware('permission:especiales.crear');
    Route::post('peticiones-especiales','SolicitudEstudianteController@peticionEspecialStore')
    ->name('especiales.store')->middleware('permission:especiales.crear');
/**
 * Rutas prorroga egresado
 */
    Route::get('prorroga-egresado/crear','SolicitudEstudianteController@prorrogaEgresadoCrear')
    ->name('prorroga.crear')->middleware('permission:prorroga.crear');
    Route::post('prorroga-egresado','SolicitudEstudianteController@prorrogaEgresadoStore')
    ->name('prorroga.store')->middleware('permission:prorroga.crear');
/**
 * Rutas retiro de ciclo
 */
    Route::get('retiro-ciclo/crear','SolicitudEstudianteController@retiroCicloCrear')
    ->name('retiro-ciclo.crear')->middleware('permission:retiro-ciclo.crear');
    Route::post('retiro-ciclo','SolicitudEstudianteController@retiroCicloStore')
    ->name('retiro-ciclo.store')->middleware('permission:retiro-ciclo.crear');
 /**
 * Rutas retiro materia
 */
    Route::get('retiro-materia/crear','SolicitudEstudianteController@retiroMateriaCrear')
    ->name('retiro-materia.crear')->middleware('permission:retiro-materia.crear');
    Route::post('retiro-materia','SolicitudEstudianteController@retiroMateriaStore')
    ->name('retiro-materia.store')->middleware('permission:retiro-materia.crear');
/**
 * ruta consultar peticiones
 */
    Route::get('consulta-estudiante','SolicitudEstudianteController@consultaIndex')
    ->name('consulta-estudiante')->middleware('permission:consulta-estudiante');

    Route::get('consulta-estudiante/{id}','SolicitudEstudianteController@consultaShow')
    ->name('consulta-estudiante.show')->middleware('permission:consulta-estudiante.show');
/**
 * ruta informacion
 */

});

/**
 *                              RUTAS DE DOCENTE
 */


Route::group(["prefix"=>"docente"],function() {
    Route::get("",function(){
        return view("docente.principal");
    })->name('docente')->middleware('permission:docente');
  /**
 * Rutas licencia incapacidad
 */
    Route::get('licencia-incapacidad/crear','SolicitudDocenteController@licenciaCrear')
    ->name('licencia.crear')->middleware('permission:licencia.crear');
    Route::post('licencia-incapacidad','SolicitudDocenteController@licenciaStore')
    ->name('licencia.store')->middleware('permission:licencia.crear');
/**
 * Rutas cambio misiones oficiales
 */
    Route::get('misiones-oficiales/crear','SolicitudDocenteController@misionOficialCrear')
    ->name('mision-oficial.crear')->middleware('permission:mision-oficial.crear');
    Route::post('misiones-oficiales','SolicitudDocenteController@misionOficialStore')
    ->name('mision-oficial.store')->middleware('permission:mision-oficial.crear');
 /**
 * Rutas denuncias
 */
    Route::get('denuncias-c-estudiantes/crear','SolicitudDocenteController@denunciaCrear')
    ->name('denuncias.crear')->middleware('permission:denuncias.crear');
    Route::post('denuncias-c-estudiantes','SolicitudDocenteController@denunciaStore')
    ->name('denuncias.store')->middleware('permission:denuncias.crear');
/**
 * Rutas reclasificacion
 */
    Route::get('reclasificacion/crear','SolicitudDocenteController@reclasificacionCrear')
    ->name('reclasificacion.crear')->middleware('permission:reclasificacion.crear');
    Route::post('reclasificacion','SolicitudDocenteController@reclasificacionStore')
    ->name('reclasificacion.store')->middleware('permission:reclasificacion.crear');
/**
 * Rutas peticiones especiales
 */
    Route::get('peticiones-especiales/crear','SolicitudDocenteController@peticionEspecialCrear')
    ->name('peticiones-especiales.crear')->middleware('permission:peticiones-especiales.crear');
    Route::post('peticiones-especiales','SolicitudDocenteController@peticionEspecialStore')
    ->name('peticiones-especiales.store')->middleware('permission:peticiones-especiales.crear');

/**
 * ruta consultar peticiones
 */
    Route::get('consulta-docente','SolicitudDocenteController@consultaIndex')
    ->name('consulta-docente')->middleware('permission:consulta-docente');

    Route::get('consulta-docente/{id}','SolicitudDocenteController@consultaShow')
    ->name('consulta-docente.show')->middleware('permission:consulta-docente.show');
/**
 * ruta informacion
 */
});

/**
 *                              RUTAS DE ADMINISTRADORES
 */


Route::group(["prefix"=>"administracion"],function() {
/**
 * rutas crear usuarios
 */
    Route::get('/',function(){
            return view('administracion.principal');       
    })->name('administracion');

    Route::get('registro-user/crear','SolicitudAdministradorController@registroUserCrear')
    ->name('registo.crear')->middleware('permission:registo.crear');
    Route::post('registro-user','SolicitudAdministradorController@registroUserStore')
    ->name('registro.store')->middleware('permission:registo.crear');

/**
 * rutas consultar peticiones docentes
 */
    Route::get('consulta-docente','SolicitudAdministradorController@consultaDocenteIndex')
    ->name('admin-docente')->middleware('permission:admin-docente');

    Route::get('consulta-docente/{id}','SolicitudAdministradorController@consultaDocenteShow')
    ->name('admin-docente.show')->middleware('permission:admin-docente.show');
/**
 * rutas consultar peticiones estudiantes
 */
    Route::get('consulta-estudiante','SolicitudAdministradorController@consultaEstudianteIndex')
    ->name('admin-estudiante')->middleware('permission:admin-estudiante');

    Route::get('consulta-estudiante/{id}','SolicitudAdministradorController@consultaEstudianteShow')
    ->name('admin-estudiante.show')->middleware('permission:admin-estudiante.show');
/**
 * rutas consultar peticion otros
 */

    Route::get('consulta-otros','SolicitudAdministradorController@consultaOtroIndex')
    ->name('admin-otros')->middleware('permission:admin-otros');

    Route::get('consulta-otros/{id}','SolicitudAdministradorController@consultaOtroShow')
    ->name('admin-otros.show')->middleware('permission:admin-otros.show');

/**
 *
 */
});

/**
 *                              RUTAS DE OTROS USUARIOS
 *
 */


Route::group(["prefix"=>"otros"],function() {
Route::get('/', function () {
    return view('otros.principal');
    })->name('otros');

    /**
 * Rutas peticiones
 */
    Route::get('peticion/crear','SolicitudOtrosController@peticionCrear')
    ->name('peticion.crear')->middleware('permission:');
    
    
    Route::post('peticion','SolicitudOtrosController@peticionStore')
    ->name('peticion.store')->middleware('permission:');

  /**
 * rutas consultar peticion otros
 */
    Route::get('consulta-otros','SolicitudOtrosController@consultaIndex')
    ->name('consulta-otros')->middleware('permission:');
    
    Route::get('consulta-otros/{id}','SolicitudOtrosController@consultaShow')
    ->name('consulta-otros.show')->middleware('permission:');

});
});