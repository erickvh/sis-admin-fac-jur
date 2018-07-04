@extends('administracion.principal')
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
                <td><b>Fecha de peticion:<b></td>
                <td>{{$solicitud->detalleSolicitud->created_at}}</td>
                <td><b>Estado de peticion<b></td>
                <td>{{$solicitud->estado->nombreEstado}}</td>     
              </tr>
              
            @if($solicitud->detalleSolicitud->fechaFinalizacion)
              <tr>
                <td><b>Fecha inicio</b></td>
              <td>{{$solicitud->detalleSolicitud->fechaInicio}}</td>
                <td><b>Fecha Fin</b></td>
              <td>{{$solicitud->detalleSolicitud->fechaFinalizacion}}</td>
                </tr>
            @endif

            @if($solicitud->detalleSolicitud->nivelAcademicaActual)
              <tr>
                <td><b>Nivel actual</b></td>
                <td>{{$solicitud->detalleSolicitud->nivelAcademicaActual}} </td>
                <td><b>Nivel deseado</b></td>
                <td>{{$solicitud->detalleSolicitud->nivelAcademicaAspira}}</td>
                </tr>
            @endif
                
            @if($solicitud->detalleSolicitud->justificacion)
                <tr>
                <td colspan="4" align=center><b>Justificacion</b></td>
              </tr>
              <tr>
              <td colspan="4" align=center>{{$solicitud->detalleSolicitud->justificacion}}</td>
              </tr>
              <tr>
             @endif
            
                <td colspan="4" align='center'> <b>Anexos</b></td>
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