@extends('administracion.principal')
@section('content')
<h2>Consulta de sus peticiones</h2>
<table class="table table-striped table-responsive-md btn-table">

    <!--Table head-->
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Tipo solicitud</th>
            <th>Fecha de solicitud</th>
            <th>Estado de solicitud</th>
            <th>Solicitado por </th>
            <th>Mostrar mas</th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        @foreach($solicitudes as $solicitud)
        <tr>
            <td>{{$solicitud->tipoSolicitud->codigoTipoSolicitud}}</td>
            
            <td>{{$solicitud->tipoSolicitud->nombreTipoSolicitud}}</th>
            <td>{{$solicitud->created_at}}</td>
            <td>{{$solicitud->estado->nombreEstado}}</td>
            <td>{{$solicitud->user->persona->nombre .' '. $solicitud->user->persona->apellido}}</td>
            <td><a href="{{route('admin-docente.show',$solicitud->id)}}" type="button" class="btn btn-primary btn-rounded btn-sm my-0">Mostrar</a></td>
        </tr>
        @endforeach
        <tr>

        </tr>

      </table>
@endsection