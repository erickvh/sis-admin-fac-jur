
@extends("administracion.principal")
@section('content')
<h3>Tipo solicitud: {{$solicitud->tipoSolicitud->nombreTipoSolicitud}} </h3>

<table class="table table-hover">
        <tbody>
            <tr>
                <td><b>Nombres<b></td>
                <td>{{$solicitud->user->persona->nombre}}</td>
                <td><b>Apellidos</b></td>
                <td>{{$solicitud->user->persona->apellido}}</td>

            </tr>
            <tr>
                <td><b>Codigo Carrera</b></td>
                <td>{{$solicitud->user->persona->carrera->codigoCarrera}}</td>
                <td><b>Nombre Carrera</b></td>
                <td colspan="3">{{$solicitud->user->persona->carrera->nombreCarrera}}</td>      
            </tr>
            <tr>
                    <td><b>Fecha de peticion:<b></td>
                  <td>{{$solicitud->detalleSolicitud->created_at}}</td>
                  <td><b>Ciclo<b></td>
                    <td>{{$solicitud->detalleSolicitud->ciclo?? 'informacion no necesaria'}}</td>
                  </tr>
                  <tr>
                    <td><b>telefono<b></td>
                  <td>{{$solicitud->detalleSolicitud->telefono??'informacion no necesaria'}}</td>
                  <td><b>Año<b></td>
                    <td>{{$solicitud->detalleSolicitud->anio??'informacion no necesaria'}}</td>
                  </tr>
                  <tr>
                    <td><b>Jefe proyeccion social<b></td>
                    <td>{{$solicitud->detalleSolicitud->nombreJefeProSocial?? 'informacion no necesaria'}}</td>
                    <td><b>Estado de peticion<b></td>
                  <td>{{$solicitud->estado->nombreEstado}}</td>
                  </tr>
                  <tr>
                        <td colspan="4" align=center><b>Justificacion<b></td>
                      </tr>
                      <tr>
                      <td colspan="4" align=center>{{$solicitud->detalleSolicitud->justificacion?? 'Informacion no necesaria'}}</td>             
                          
                       </tr>
                       <tr>
                        <td colspan="4" align=center><b>Materias<b></td>             
        
                    </tr>
                    <tr>
                        <td colspan="4" align=center>
                           @foreach ($solicitud->detalleSolicitud->materias as $materia)
                            <p>{{$materia->nombreMateria}}</p>     
                            @endforeach 
                        </td>   
                    </tr>
                    <tr>
                            <td colspan="4" align=center><b>Grupos Teorico<b>
        
                            </td>
                                          
        
                        </tr>
                        <tr>
                          <td colspan="4" align=center>
                            <p>Grupo actual: {{App\DetalleSolicitudMateria::find($solicitud->id)->grupoActual?? 'informacion no necesaria'}}</p>
                            <p>Grupo deseado: {{App\DetalleSolicitudMateria::find($solicitud->id)->grupoDeseado?? 'informacion no necesaria'}}</p> 
                          </td>
                        </tr>
                        <tr>
                            
                                <td colspan="4">
                                    @foreach ($solicitud->detalleSolicitud->anexos as $anexo)
                                <a href="">{{$anexo}}</a>
                                   @endforeach 
                                   </td>
        
                               </td>
                        
                        </tr>    
        </tbody>
</table>



@endsection