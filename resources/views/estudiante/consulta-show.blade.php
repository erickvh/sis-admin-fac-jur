@extends("estudiante.principal")

@section('content')
<h3>Tipo solicitud: {{$solicitud->tipoSolicitud->nombreTipoSolicitud}} </h3>




<h1>Detalle</h1>

{{$solicitud->detalleSolicitud}}

<h1>Tipo</h1>
{{$solicitud->tipoSolicitud}}
<h1>anexos</h1>
{{$solicitud->detalleSolicitud->anexos}}
<h1>materia solicitud</h1>
{{$solicitud->detalleSolicitud->materias}}


@endsection
