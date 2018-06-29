@extends('docente.principal')
@section('content')


<h1>reclasificacion academica</h1>
<form action="{{route('reclasificacion.store')}}" method="POST">
{{csrf_field()}}


<div class="form-group">
        <label for="nombre">Nombre completo</label>
        <input class="form-control" id="nombre" type="text"  readonly>
      </div>
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="dui">DUI</label>
            <input class="form-control" id="dui" type="text" readonly>
          </div>
          <div class="col-md-6">
            <label for="exampleConfirmPassword">Email</label>
            <input class="form-control" id="email" type="text" readonly>

          </div>
        </div>
      </div>
      <div class="form-group">
          <div class="form-row">


                      <div class="col-md-4">
                            <label for="nivelActual">Nivel actual</label>
                            <input class="form-control" id="nivelActual" name="nivelActual" type="number" min="1" max=3 >
                      </div>
                      
                      <div class="col-md-4">
                            <label for="nivelDeseado">Nivel deseado</label>
                            <input class="form-control" id="nivelDeseado" name="nivelDeseado" type="number" min="1" max=3 >
                      </div>

          </div>
      </div>
      <div class="form-group">
          <div class="form-row">
                <div class="col-md-4">
                        <label for="ciclo">Fecha de finalizacion</label>
                        <input type="date" name="fechaFin" value="">
                      </div>

                      <div class="col-md-8">
                        <label for="justificacion">Justificación</label>
                        <textarea class="form-control" id="justificacion" name="justificacion" rows="3"></textarea>
                      </div>

          </div>
      </div>




  <button type="submit" class="btn btn-primary btn-block">Enviar Petición</a>








@endsection