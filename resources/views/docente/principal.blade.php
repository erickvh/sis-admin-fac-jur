@extends('layouts.master')
@section('title')
Docente
@endsection

@section('menu')
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="index.html">
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
            <a href="navbar.html">Licencias de incapacidad</a>
          </li>
          <li>
            <a href="cards.html">Misiones oficiales</a>
          </li>
          <li><a href="">Denuncias contra estudiantes</a></li>
          <li><a href="">Reclasificación academica</a></li>
          <li><a href="">Peticiones especiales</a></li>

@endsection

@section('content')
Docente 
@endsection