@extends('docente.principal')
@section('content')
<h2>Consulta de sus peticiones</h2>
<table class="table table-striped table-responsive-md btn-table">

    <!--Table head-->
    <thead>
        <tr>
            <th>Tipo solicitud</th>
            <th>Fecha de solicitud</th>
            <th>Estado de solicitud</th>
            <th>Mostrar mas</th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        <tr>
            <th>Docente x</th>
            <td>10/10/2019</td>
            <td>En espera</td>
            <td><a href="{{route('consulta-docente.show',1)}}" type="button" class="btn btn-primary btn-rounded btn-sm my-0">Mostrar</a></td>
        </tr>
        <tr>

        </tr>

      </table>
 
@endsection