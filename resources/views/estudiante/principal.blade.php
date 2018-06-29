@extends('layouts.master')

@section('title')
Alumno
@endsection

@section('menu')
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="{{route('estudiante')}}">
          <i class="fa fa-graduation-cap"></i>
          <span class="nav-link-text">Estudiante</span>
        </a>
      </li>

           <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-file"></i>
                    <span class="nav-link-text">Solicitudes</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponents">
          <li>
          <a href="{{route('cambio-grupo.crear')}}">Cambio Grupo</a>
          </li>
          <li>
            <a href="{{route('denuncia.crear')}}">Denuncia</a>
          </li>
          <li><a href="{{route('inscripcion-extemporanea.crear')}}">Inscripcion extemporanea</a></li>
          <li><a href="{{route('memoria-social.crear')}}">Memoria de servicio social</a></li>
        <li><a href="{{route('especiales.crear')}}">Peticiones especiales</a></li>
          <li><a href="{{route('prorroga.crear')}}">Prorroga egresado</a></li>
          <li><a href="{{route('retiro-ciclo.crear')}}">Retiro de ciclo</a></li>
          <li><a href="{{route('retiro-materia.crear')}}">Retiro de materias</a></li>
        </ul>
      </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Consulta">
        <a class="nav-link" href="{{route('consulta-estudiante')}}">
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
<h1>BIENVENIDO AL SISTEMA DE SOLICITUDES</h1>
@endsection
