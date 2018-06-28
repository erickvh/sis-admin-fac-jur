@extends('layouts.master')
@section('title')
Bienvenido
@endsection

@section('menu')
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="index.html">
          <i class="fa fa-user"></i>
          <span class="nav-link-text">Otro Usuario</span>
        </a>
      </li>
                 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Consulta">
        <a class="nav-link" href="#">
          <i class="fa fa-fw fa-file"></i>
          <span class="nav-link-text">Crear solicitud</span>
        </a>
      </li>
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Consulta">
        <a class="nav-link" href="#">
          <i class="fa fa-fw fa-book"></i>
          <span class="nav-link-text">Consultar peticiones</span>
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
@endsection