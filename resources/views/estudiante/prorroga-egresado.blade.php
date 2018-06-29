@extends("estudiante.principal")

@section('content')
<h1>Prorrogra egresado</h1>
<form action="{{route('prorroga.store')}}" method="POST">
{{csrf_field()}}


<div class="form-group">
        <label for="nombre">Nombre completo</label>
        <input class="form-control" id="nombre" type="text"  readonly>
      </div>
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="Carnet">Carnet</label>
            <input class="form-control" id="carnet" type="text" readonly>
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
                        <label for="ciclo">Ciclo</label>
                        <select class="form-control" name="ciclo">
                          <option value="1">Ciclo I</option>
                          <option value="2">Ciclo II</option>

                        </select>
                      </div>

                      <div class="col-md-4">
                            <label for="anio">Año prorroga</label>
                            <input class="form-control" id="anio" name="anio" type="number" min="2018"  placeholder="Año">
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

  </form>

@endsection
