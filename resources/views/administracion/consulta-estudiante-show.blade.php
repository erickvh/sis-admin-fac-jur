
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
                  
                    @if($solicitud->detalleSolicitud->ciclo)
                  <td><b>Ciclo<b></td>
                    <td>{{$solicitud->detalleSolicitud->ciclo?? 'informacion no necesaria'}}</td>
                  @endif
                  </tr>
                  
                  <tr>
                    @if($solicitud->detalleSolicitud->telefono)
                    <td><b>telefono<b></td>
                  <td>{{$solicitud->detalleSolicitud->telefono??'informacion no necesaria'}}</td>
                    @endif

                    @if($solicitud->detalleSolicitud->anio)
                  <td><b>Año<b></td>
                    <td>{{$solicitud->detalleSolicitud->anio??'informacion no necesaria'}}</td>
                    @endif
                  </tr>
                  
                  <tr>
                    @if($solicitud->detalleSolicitud->nombreJefeProSocial)
                    <td><b>Jefe proyeccion social<b></td>
                    <td>{{$solicitud->detalleSolicitud->nombreJefeProSocial?? 'informacion no necesaria'}}</td>
                    @endif

                    <td><b>Estado de peticion<b></td>
                  <td>{{$solicitud->estado->nombreEstado}}</td>
                  </tr>

                  @if($solicitud->detalleSolicitud->justificacion)
                  <tr>
                        <td colspan="4" align=center><b>Justificacion<b></td>
                      </tr>
                      <tr>
                      <td colspan="4" align=center>{{$solicitud->detalleSolicitud->justificacion?? 'Informacion no necesaria'}}</td>             
                          
                       </tr>
                       @endif

                       @if(count($solicitud->detalleSolicitud->materias)>0)
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
                      @endif

                      @if(App\DetalleSolicitudMateria::where('detalleSolicitudId',$solicitud->detalleSolicitud->id)->first())
                    <tr>
                            <td colspan="4" align=center><b>Grupos Teorico<b>
        
                            </td>
                                          
        
                        </tr>
                        <tr>
                          <td colspan="4" align=center>
                            <p>Grupo actual: {{App\DetalleSolicitudMateria::where('detalleSolicitudId',$solicitud->detalleSolicitud->id)->first()->grupoActual??'as'}}</p>
                            <p>Grupo deseado: {{App\DetalleSolicitudMateria::where('detalleSolicitudId',$solicitud->detalleSolicitud->id)->first()->grupoDeseado??'as' }}</p> 
                          </td>
                        </tr>
                        @endif
                        @if(count($solicitud->detalleSolicitud->anexos)>0)
                        <tr>
                        <td colspan="4" align=center><b>Anexos</b></td>
                        </tr>
                        <tr>
                            
                                <td colspan="4">
                                    @foreach ($solicitud->detalleSolicitud->anexos as $anexo)
                                    <a href="{{Storage::url($anexo->ruta)}}" target="_blank">{{$anexo->nombreOriginal}}</a>
                                   @endforeach 
                                </td>
        
                               </td>
                        
                        </tr>
                      @endif
        </tbody>
</table>



@endsection