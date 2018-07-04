@extends('administracion.principal')
@section('content')
<h3>Asunto: {{$solicitud->detalleSolicitud->justificacion?? 'no disponible'}} </h3>

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
          <td>{{$solicitud->created_at}}</td>
        
            <td><b>Estado Actual:</b></td>
         <td>{{$solicitud->estado->nombreEstado}}</td>
        </tr>     
        <tr>
            <td colspan="4" align=center><b>Archivos</b></td>
        </tr>
        <tr>
       <td colspan="4">
            @foreach ($solicitud->detalleSolicitud->anexos as $anexo)
            <a href="">{{$anexo}}</a>
               @endforeach 
        </td>

    </tr>
          </tbody>
        </table>
@endsection