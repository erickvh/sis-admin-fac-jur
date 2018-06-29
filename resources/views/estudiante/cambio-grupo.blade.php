@extends("estudiante.principal")

@section('content')
<form action="{{route('cambio-grupo.store')}}" method="POST">
{{csrf_field()}}
    <div class="form-group">
      <label for="nombre">Nombre completo</label>
      <input class="form-control" id="nombre" type="text" value="{{ $persona->nombre }} , {{ $persona->apellido }}" readonly>
    </div>

    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6">
          <label for="Carnet">Carnet</label>
          <input class="form-control" id="carnet" type="text" value="{{ $persona->carnet }}" readonly>
        </div>
        <div class="col-md-6">
          <label for="exampleConfirmPassword">Email</label>
          <input class="form-control" id="email" type="text" value="{{ Auth::user()->email }}" readonly>

        </div>
      </div>
    </div>

    <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="telefono">Telefono</label>
            <input class="form-control" id="telefono" type="text" name="telefono" maxlength="9" required placeholder="ingrese numero de telefono" onkeyup="guion()">
          </div>
          <div class="col-md-6">
            <label for="materia">Materia</label>
            <select class="form-control" name="materia">
                @foreach($materias as $materia)
                    <option value="{{ $materia->id }}">{{ $materia->nombreMateria }}</option>
                @endforeach
            </select>
          </div>
        </div>
      </div>

      <div class="form-group">
          <div class="form-row">
            <div class="col-md-4">
                <label for="grupoActual">Numero grupo actual</label>
                <input class="form-control" id="grupoActual" type="number" name="grupoActual" min="1" required placeholder="Numero grupo actual">
              </div>
            <div class="col-md-4">
                  <label for="grupoDeseado">Numero grupo deseado</label>
                  <input class="form-control" id="grupoDeseado" name="grupoDeseado" type="number" min="1" required placeholder="Numero grupo que desea">
            </div>
          </div>
        </div>

        <div class="form-group">
            <label for="justificacion">Justificación</label>
            <textarea class="form-control" id="justificacion" name="justificacion" required rows="5"></textarea>
          </div>
    <button type="submit" class="btn btn-primary btn-block">Enviar Petición</button>

  </form>
    <script>
        function guion() {
            var telefono = document.getElementById('telefono');
            if(telefono.value.length == 4){
                telefono.value += '-';
            }
        }
    </script>

@endsection
