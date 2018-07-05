@extends("estudiante.principal")

@section('content')
<h1>Formulario memoria social</h1>
<form action="{{route('memoria-social.store')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    @include('partials.exito')
        <div class="form-group">
          <label for="nombre">Nombre completo</label>
          <input class="form-control" id="nombre" type="text" value="{{$persona->nombre}}, {{$persona->apellido}}" readonly>
        </div>
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <label for="Carnet">Carnet</label>
            <input class="form-control" id="carnet" type="text" value={{$persona->carnet}} readonly>
            </div>
            <div class="col-md-6">
              <label for="exampleConfirmPassword">Email</label>
              <input class="form-control" id="email" type="text" value={{Auth::user()->email}} readonly>

            </div>
          </div>
        </div>

        <div class="form-group">
            <div class="form-row">
                <div class="col-md-6{{ $errors->has('fechaInicio') ? ' has-error' : '' }}">
                    <label for=fecha>Fecha inicio</label>
                    <input class="form-control" id="fechaInicio" type="date" name="fechaInicio" required value="{{ old('fechaInicio') }}">
                    @if ($errors->has('fechaInicio'))
                        <span class="help-block">
                <strong>{{ $errors->first('fechaInicio') }}</strong>
                    </span>
                    @endif
                  </div>

                  <div class="col-md-6{{ $errors->has('fechaFin') ? ' has-error' : '' }}">
                    <label for=fecha>Fecha Fin</label>
                    <input class="form-control" id="fechaFin" type="date" name="fechaFin" required value="{{ old('fechaFin') }}">
                      @if ($errors->has('fechaFin'))
                          <span class="help-block">
                <strong>{{ $errors->first('fechaFin') }}</strong>
                    </span>
                      @endif
                  </div>
                </select>

              </div>

              </div>
              <div class="form-group{{ $errors->has('jefe') ? ' has-error' : '' }}">
              <div class="col-md-6">
                <div class="form-row">
                <label for="name">Jefe de proyeccion social</label>
                <input class="form-control" id="name" type="text" name="jefe" maxlength="75" required value="{{ old('jefe') }}" onkeypress="return valida(event)">
                    @if ($errors->has('jefe'))
                        <span class="help-block">
                <strong>{{ $errors->first('jefe') }}</strong>
                    </span>
                    @endif
              </div>
            </div>
            </div>

            <div class="form-group{{ $errors->has('anexo') ? ' has-error' : '' }}">
                    <label for="exampleInputFile">Anexe su archivo</label>
                    <input type="file" name="anexo[]" class="form-control" required multiple id="anexo" aria-describedby="fileHelp">
                @if ($errors->has('anexo'))
                    <span class="help-block">
                <strong>{{ $errors->first('anexo') }}</strong>
                    </span>
                @endif
                    <small id="fileHelp" class="form-text text-muted">formato de archivo .pdf</small>

                  </div>
          </div>

    <button type="submit" class="btn btn-primary btn-block">Enviar Petición</button>

      </form>

<script>
    function valida(e){
        tecla = (document.all) ? e.keyCode : e.which;

        //Tecla de retroceso para borrar, siempre la permite
        if (tecla==8){
            return true;
        }

        // Patron de entrada, en este caso solo acepta numeros
        patron =/[a-zA-ZáéíóúÁÉÍÓÚñÑ ]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
    }
</script>

@endsection
