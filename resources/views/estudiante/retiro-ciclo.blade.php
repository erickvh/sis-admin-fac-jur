@extends("estudiante.principal")

@section('content')
<h1>Formulario retiro ciclo</h1>
<form action="{{route('retiro-ciclo.store')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    @if(session('status'))
        <div class="alert alert-info">
            {{session('status')}}
        </div>
    @endif
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
                <div class="col-md-4{{ $errors->has('telefono') ? ' has-error' : '' }}">
                    <label for="telefono">Telefono</label>
                    <input class="form-control" id="telefono" type="text" name="telefono" value="{{ old('telefono') }}" maxlength="9" required  placeholder="Numero de telefono" onkeyup="guion()" onkeypress="return valida(event)">
                    @if ($errors->has('telefono'))
                        <span class="help-block">
                <strong>{{ $errors->first('telefono') }}</strong>
                    </span>
                    @endif
                  </div>
              <div class="col-md-4">
                <label for="ciclo">Ciclo</label>
                <select class="form-control" name="ciclo">
                  <option value="1" {{ (old('ciclo') == 1 ? " selected" : "") }}>Ciclo I</option>
                  <option value="2" {{ (old('ciclo') == 2 ? " selected": "") }}>Ciclo II</option>

                </select>
                  @if ($errors->has('ciclo'))
                      <span class="help-block">
                <strong>{{ $errors->first('ciclo') }}</strong>
                    </span>
                  @endif
              </div>

              <div class="col-md-4{{ $errors->has('anio') ? ' has-error' : '' }}">
                    <label for="anio">Año</label>
                    <input class="form-control" id="anio" name="anio" value="{{ old('anio') }}" type="number" min="2018" required  placeholder="Año">
                  @if ($errors->has('anio'))
                      <span class="help-block">
                <strong>{{ $errors->first('anio') }}</strong>
                    </span>
                  @endif
              </div>
            </div>
          </div>


            <div class="form-group{{ $errors->has('anexo') ? ' has-error' : '' }}">
                    <label for="exampleInputFile">Anexe su archivo</label>
                    <input type="file" name="anexo[]" class="form-control" id="anexo" required multiple aria-describedby="fileHelp">
                @if ($errors->has('anexo'))
                    <span class="help-block">
                <strong>{{ $errors->first('anexo') }}</strong>
                    </span>
                @endif
                    <small id="fileHelp" class="form-text text-muted">formato de archivo .pdf</small>

                  </div>

          <div class="form-group{{ $errors->has('justificacion') ? ' has-error' : '' }}">
              <label for="justificacion">Justificación</label>
              <textarea class="form-control" id="justificacion" name="justificacion" required rows="3">{{ old('justificacion')  }}</textarea>
              @if ($errors->has('justificacion'))
                  <span class="help-block">
                <strong>{{ $errors->first('justificacion') }}</strong>
                    </span>
              @endif
            </div>

    <button type="submit" class="btn btn-primary btn-block">Enviar Petición</button>

      </form>

            </div>
<script>
    function guion() {
        var telefono = document.getElementById('telefono');
        if(telefono.value.length == 4){
            telefono.value += '-';
        }
    }
    function valida(e){
        tecla = (document.all) ? e.keyCode : e.which;

        //Tecla de retroceso para borrar, siempre la permite
        if (tecla==8){
            return true;
        }

        // Patron de entrada, en este caso solo acepta numeros
        patron =/[0-9]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
    }
</script>
@endsection
