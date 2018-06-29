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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 *                              RUTAS DE NO REGISTRADOS
 */


 /**
 *                              RUTAS DE ESTUDIANTE
 */


Route::group(["prefix"=>"estudiante"],function() {
    Route::get('/',function(){
        return view('estudiante.principal');
    })->name('estudiante');
 /**
 * Rutas cambio grupo
 */
    Route::get('cambio-grupo/crear','SolicitudEstudianteController@cambioGrupoCrear')
    ->name('cambio-grupo.crear');

    Route::post('cambio-grupo','SolicitudEstudianteController@cambioGrupoStore')
    ->name('cambio-grupo.store');
/**
 * Rutas denuncias
 */
    Route::get('denuncia/crear','SolicitudEstudianteController@denunciaCrear')
    ->name('denuncia.crear');
    Route::post('denuncia','SolicitudEstudianteController@denunciaStore')
    ->name('denuncia.store');
/**
 * Rutas incripcion extemporanea
 */
    Route::get('inscripcion-extemporanea/crear','SolicitudEstudianteController@inscripcionCrear')
    ->name('inscripcion-extemporanea.crear');

    Route::post('inscripcion-extemporanea','SolicitudEstudianteController@inscripcionStore')
    ->name('inscripcion-extemporanea.store');
/**
 * Rutas  memoria servicio social
 */
    Route::get('memoria-s-social/crear','SolicitudEstudianteController@memoriaSocialCrear')
    ->name('memoria-social.crear');

    Route::post('memoria-s-social','SolicitudEstudianteController@memoriaSocialStore')
    ->name('memoria-social.store');

/**
 * Rutas peticiones especiales
 */
    Route::get('peticiones-especiales/crear','SolicitudEstudianteController@peticionEspecialCrear')
    ->name('especiales.crear');
    Route::post('peticiones-especiales','SolicitudEstudianteController@peticionEspecialStore')
    ->name('especiales.store');
/**
 * Rutas prorroga egresado
 */
    Route::get('prorroga-egresado/crear','SolicitudEstudianteController@prorrogaEgresadoCrear')
    ->name('prorroga.crear');
    Route::post('prorroga-egresado','SolicitudEstudianteController@prorrogaEgresadoStore')
    ->name('prorroga.store');
/**
 * Rutas retiro de ciclo
 */
    Route::get('retiro-ciclo/crear','SolicitudEstudianteController@retiroCicloCrear')
    ->name('retiro-ciclo.crear');
    Route::post('retiro-ciclo','SolicitudEstudianteController@retiroCicloStore')
    ->name('retiro-ciclo.store');
 /**
 * Rutas retiro materia
 */
    Route::get('retiro-materia/crear','SolicitudEstudianteController@retiroMateriaCrear')
    ->name('retiro-materia.crear');
    Route::post('retiro-materia','SolicitudEstudianteController@retiroMateriaStore')
    ->name('retiro-materia.store');
/**
 * ruta consultar peticiones
 */
    Route::get('consulta-estudiante','SolicitudEstudianteController@consultaIndex')
    ->name('consulta-estudiante');

    Route::get('consulta-estudiante/{id}','SolicitudEstudianteController@consultaShow')
    ->name('consulta-estudiante.show');
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
    })->name('docente');
  /**
 * Rutas licencia incapacidad
 */
    Route::get('licencia-incapacidad/crear','SolicitudDocenteController@licenciaCrear')
    ->name('licencia.crear');
    Route::post('licencia-incapacidad','SolicitudDocenteController@licenciaStore')
    ->name('licencia.store');
/**
 * Rutas cambio misiones oficiales
 */
    Route::get('misiones-oficiales/crear','SolicitudDocenteController@misionOficialCrear')
    ->name('mision-oficial.crear');
    Route::post('misiones-oficiales','SolicitudDocenteController@misionOficialStore')
    ->name('mision-oficial.store');
 /**
 * Rutas denuncias
 */
    Route::get('denuncias-c-estudiantes/crear','SolicitudDocenteController@denunciaCrear')
    ->name('denuncias.crear');
    Route::post('denuncias-c-estudiantes','SolicitudDocenteController@denunciaStore')
    ->name('denuncias.store');
/**
 * Rutas reclasificacion
 */
    Route::get('reclasificacion/crear','SolicitudDocenteController@reclasificacionCrear')
    ->name('reclasificacion.crear');
    Route::post('reclasificacion','SolicitudDocenteController@reclasificacionStore')
    ->name('reclasificacion.store');
/**
 * Rutas peticiones especiales
 */
    Route::get('peticiones-especiales/crear','SolicitudDocenteController@peticionEspecialCrear')
    ->name('peticiones-especiales.crear');
    Route::post('peticiones-especiales','SolicitudDocenteController@peticionEspecialStore')
    ->name('peticiones-especiales.store');

/**
 * ruta consultar peticiones
 */
    Route::get('consulta-docente','SolicitudDocenteController@consultaIndex')
    ->name('consulta-docente');

    Route::get('consulta-docente/{id}','SolicitudDocenteController@consultaShow')
    ->name('consulta-docente.show');
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
    Route::get('registro-user/crear','SolicitudAdministradorController@registroUserCrear')
    ->name('registo.crear');
    Route::post('registro-user','SolicitudAdministradorController@registroUserStore')
    ->name('registro.store');

/**
 * rutas consultar peticiones docentes
 */
    Route::get('consulta-docente','SolicitudAdministradorController@consultaDocenteIndex')
    ->name('admin-docente');

    Route::get('consulta-docente/{id}','SolicitudAdministradorController@consultaDocenteShow')
    ->name('admin-docente.show');
/**
 * rutas consultar peticiones estudiantes
 */
    Route::get('consulta-estudiante','SolicitudAdministradorController@consultaEstudianteIndex')
    ->name('admin-estudiante');

    Route::get('consulta-estudiante/{id}','SolicitudAdministradorController@consultaEstudianteShow')
    ->name('admin-estudiante.show');
/**
 * rutas consultar peticion otros
 */

    Route::get('consulta-otros','SolicitudAdministradorController@consultaOtroIndex')
    ->name('admin-otros');

    Route::get('consulta-otros/{id}','SolicitudAdministradorController@consultaOtroShow')
    ->name('admin-otros');

/**
 *
 */
});

/**
 *                              RUTAS DE OTROS USUARIOS
 *
 */


Route::group(["prefix"=>"otros"],function() {
 /**
 * Rutas licencia incapacidad
 */
    Route::get('peticion/crear','SolicitudOtrosController@peticionCrear')
    ->name('peticion.crear');
    Route::post('peticion','SolicitudOtrosController@peticionStore')
    ->name('peticion.store');

  /**
 * rutas consultar peticion otros
 */
    Route::get('consulta-otros','SolicitudOtrosController@consultaIndex')
    ->name('consulta-otros');
    Route::get('consulta-otros/{id}','SolicitudOtrosController@consultaShow')
    ->name('consulta-otros.show');

});
