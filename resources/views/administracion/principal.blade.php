@extends('layouts.master')

@section('title')
Administracion
@endsection

@section('menu')
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Administrador">
<a class="nav-link" href="{{route('administracion')}}">
          <i class="fa fa-user"></i>
          <span class="nav-link-text">Administracion</span>
        </a>
</li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Registrar usuarios">
        <a class="nav-link" href="{{route('registo.crear')}}">
          <i class="fa fa-fw fa-users"></i>
          <span class="nav-link-text">Registrar usuarios</span>
        </a>
        </li>

           <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Consultar">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-search"></i>
                    <span class="nav-link-text">consultar peticiones</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponents">
          <li>
          <a href="{{route('admin-estudiante')}}">Peticiones estudiantes</a>
          </li>
          <li>
            <a href="{{route('admin-docente')}}">Peticiones docentes</a>
          </li>
          <li><a href="{{route('admin-otros')}}">Peticiones otros</a>
          </li>
        </ul>
        </li>
@endsection