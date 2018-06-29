@extends('layouts.master')
@section('title')
Docente
@endsection

@section('menu')
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href=""{{route('docente')}}"">
          <i class="fa fa-leanpub"></i>
          <span class="nav-link-text">Docente</span>
        </a>
      </li>

           <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-file"></i>
                    <span class="nav-link-text">Solicitudes</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponents">
          <li>
            <a href="{{route('licencia.crear')}}">Licencias de incapacidad</a>
          </li>
          <li>
            <a href="{{route('mision-oficial.crear')}}">Misiones oficiales</a>
          </li>
          <li><a href="{{route('denuncias.crear')}}">Denuncias contra estudiantes</a></li>
          <li><a href="{{route('reclasificacion.crear')}}">Reclasificación academica</a></li>
          <li><a href="{{route('peticiones-especiales.crear')}}">Peticiones especiales</a></li>
                  </ul>
      </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Consulta">
        <a class="nav-link" href="{{route('consulta-docente')}}">
          <i class="fa fa-fw fa-book"></i>
          <span class="nav-link-text">Consulta de peticiones</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="informacion">
        <a class="nav-link" href="#">
          <i class="fa fa-fw fa-info-circle"></i>
          <span class="nav-link-text">Informacion</span>
        </a>
      </li>

@endsection

@section('content')
Docente 
@endsection