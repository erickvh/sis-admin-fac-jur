@extends('layouts.master')

@section('title')
Administracion
@endsection

@section('menu')
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="index.html">
          <i class="fa fa-user"></i>
          <span class="nav-link-text">Administracion</span>
        </a>
      </li>
                 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Consulta">
        <a class="nav-link" href="#">
          <i class="fa fa-fw fa-users"></i>
          <span class="nav-link-text">Registrar usuarios</span>
        </a>
      </li>

           <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-search"></i>
                    <span class="nav-link-text">consultar peticiones</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponents">
          <li>
            <a href="">Peticiones estudiantes</a>
          </li>
          <li>
            <a href="Registrar">Peticiones docentes</a>
          </li>
          <li><a href="">Peticiones otros</a></li>

@endsection