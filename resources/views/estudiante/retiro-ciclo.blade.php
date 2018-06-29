@extends("estudiante.principal")

@section('content')
<h1>Formulario retiro ciclo</h1>
<form action="{{route('retiro-ciclo.store')}}" method="POST">
    {{csrf_field()}}
        <div class="form-group">
          <label for="nombre">Nombre completo</label>
        <input class="form-control" id="nombre" type="text" value='{{$persona->nombre}}, {{ $persona->apellido }}' readonly>
        </div>
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <label for="Carnet">Carnet</label>
              <input class="form-control" id="carnet" type="text" value='{{$persona->carnet}}' readonly>
            </div>
            <div class="col-md-6">
              <label for="exampleConfirmPassword">Email</label>
              <input class="form-control" id="email" type="text" value={{Auth::user()->email}} readonly>

            </div>
          </div>
        </div>

        <div class="form-group">
            <div class="form-row">
                <div class="col-md-4">
                    <label for="telefono">Telefono</label>
                    <input class="form-control" id="telefono" type="text" name="telefono"  placeholder="Numero de telefono">
                  </div>
              <div class="col-md-4">
                <label for="ciclo">Ciclo</label>
                <select class="form-control" name="ciclo">
                  <option value="1">Ciclo I</option>
                  <option value="2">Ciclo II</option>

                </select>
              </div>

              <div class="col-md-4">
                    <label for="anio">Año</label>
                    <input class="form-control" id="anio" name="anio" type="number" min="2018"  placeholder="Año">
              </div>
            </div>
          </div>


            <div class="form-group">
                    <label for="exampleInputFile">Anexe su archivo</label>
                    <input type="file" name="anexo" class="form-control-file" id="anexo" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">formato de archivo .pdf</small>

                  </div>

          <div class="form-group">
              <label for="justificacion">Justificación</label>
              <textarea class="form-control" id="justificacion" name="justificacion" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Enviar Petición</a>

      </form>

            </div>

@endsection
