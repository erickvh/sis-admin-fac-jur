@extends('administracion.principal')
@section('content')
<h2>Consulta de peticiones otros usuarios</h2>

<table class="table table-striped table-responsive-md btn-table">

    <!--Table head-->
    <thead>
        <tr>
            <th>Asunto</th>
            <th>Fecha de solicitud</th>
            <th>Estado de solicitud</th>
            <th>Mostrar mas</th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        @foreach($solicitudes as $solicitud)
        <tr>
            <td>{{ $solicitud->detalleSolicitud->justificacion?? 'no hay asunto' }}</td>
            <td>{{$solicitud->created_at}}</td>
            <td>{{$solicitud->estado->nombreEstado}}</td>
            <td><a href="{{route('admin-otros.show',$solicitud->id)}}" type="button" class="btn btn-primary btn-rounded btn-sm my-0">Mostrar</a></td>
        </tr>
        @endforeach
        <tr>

        </tr>

      </table>
@endsection