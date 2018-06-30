
@extends("estudiante.principal")
@section('content')
<h3>Tipo solicitud: {{$solicitud->tipoSolicitud->nombreTipoSolicitud}} </h3>

<table class="table table-hover">

        <tbody>
          <tr>
            <td>Fecha de peticion:</td>
          <td>{{$solicitud->detalleSolicitud->created_at}}</td>
          <td>Ciclo</td>
            <td>{{$solicitud->detalleSolicitud->ciclo?? 'informacion no necesaria'}}</td>
          </tr>
          <tr>
            <td>telefono</td>
          <td>{{$solicitud->detalleSolicitud->telefono??'informacion no necesaria'}}</td>
          <td>Año</td>
            <td>{{$solicitud->detalleSolicitud->anio??'informacion no necesaria'}}</td>
          </tr>
          <tr>
            <td>Jefe proyeccion social</td>
            <td>{{$solicitud->detalleSolicitud->nombreJefeProSocia?? 'informacion no necesaria'}}</td>
            <td>Estado de peticion</td>
          <td>{{$solicitud->estado->nombreEstado}}</td>
          </tr>
          <tr>
                <td colspan="4" align=center>Justificacion</td>
              </tr>
              <tr>
              <td colspan="4" align=center>{{$solicitud->detalleSolicitud->justificacion?? 'Informacion no necesaria'}}</td>             
                  
               </tr>
               <tr>
                <td colspan="4" align=center>Materias</td>             

            </tr>
            <tr>
                <td colspan="4" align=center>
                    @foreach ($solicitud->detalleSolicitud->materias as $materia)
                    <p>{{$materia->nombreMateria}}</p>     
                    @endforeach 
                </td>   
            </tr>
            <tr>
                    <td colspan="4" align=center>Grupos Teoricos</td>             

                </tr>
                <tr>
       
            </tr>
        </tbody>
      </table>



@endsection
