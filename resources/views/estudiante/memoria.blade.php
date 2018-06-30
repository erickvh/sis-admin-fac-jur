@extends("estudiante.principal")

@section('content')
<h1>Formulario memoria social</h1>
<form action="{{route('memoria-social.store')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    @if(session('status'))
        <div class="alert alert-info">
            {{session('status')}}
        </div>
    @endif
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

        <div class="form-group{{ $errors->has('fechaFin') ? ' has-error' : '' }}">
            <div class="form-row">
                <div class="col-md-6">
                    <label for=fecha>Fecha inicio</label>
                    <input class="form-control" id="fechaInicio" type="date" name="fechaInicio" required value="{{ old('fechaInicio') }}">
                    @if ($errors->has('fechaInicio'))
                        <span class="help-block">
                <strong>{{ $errors->first('fechaInicio') }}</strong>
                    </span>
                    @endif
                  </div>

                  <div class="col-md-6">
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
                <input class="form-control" id="name" type="text" name="jefe" required value="{{ old('jefe') }}">
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
                    <input type="file" name="anexo[]" class="form-control-file" required multiple id="anexo" aria-describedby="fileHelp">
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



@endsection
