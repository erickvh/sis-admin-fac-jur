@extends('layouts.master')

@section('title')
Alumno
@endsection

@section('menu')
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="index.html">
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
            <a href="navbar.html">Cambio Grupo</a>
          </li>
          <li>
            <a href="cards.html">Denuncia</a>
          </li>
          <li><a href="">Inscripcion extemporanea</a></li>
          <li><a href="">Memoria de servicio social</a></li>
          <li><a href="">Peticiones especiales</a></li>
          <li><a href="">Prorroga egresado</a></li>
          <li><a href="">Retiro de ciclo</a></li>
          <li><a href="">Retiro de materias</a></li>
        </ul>
      </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Consulta">
        <a class="nav-link" href="#">
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