@extends("estudiante.principal")

@section('content')
<h1>Prorrogra egresado</h1>
<form action="{{route('prorroga.store')}}" method="POST" enctype="multipart/form-data">
{{csrf_field()}}
    @include('partials.exito')
<div class="form-group">
        <label for="nombre">Nombre completo</label>
        <input class="form-control" id="nombre" type="text" value="{{$persona->nombre}},  {{ $persona->apellido }}" readonly>
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
                <div class="col-md-4">
                        <label for="ciclo">Ciclo</label>
                        <select class="form-control" name="ciclo">
                          <option value="1" {{ (old('ciclo') == 1 ? " selected" : "") }}>Ciclo I</option>
                          <option value="2" {{ (old('ciclo') == 2 ? " selected" : "") }}>Ciclo II</option>

                        </select>
                      </div>

                      <div class="col-md-4{{ $errors->has('anio') ? ' has-error' : '' }}">
                            <label for="anio">Año prorroga</label>
                            <input class="form-control" id="anio" name="anio" value="{{ old('anio') }}" required type="number" min="2018"  placeholder="Año">
                          @if ($errors->has('anio'))
                              <span class="help-block">
                <strong>{{ $errors->first('anio') }}</strong>
                    </span>
                          @endif
                      </div>

          </div>
      </div>
      <div class="form-group">
          <div class="form-row">
                <div class="col-md-4{{ $errors->has('fechaFin') ? ' has-error' : '' }}">
                        <label for="ciclo">Fecha de finalizacion</label>
                        <input type="date" class="form-control" value="{{ old('fechaFin') }}" required name="fechaFin" value="">
                    @if ($errors->has('fechaFin'))
                        <span class="help-block">
                <strong>{{ $errors->first('fechaFin') }}</strong>
                    </span>
                    @endif
                      </div>

                      <div class="col-md-8{{ $errors->has('justificacion') ? ' has-error' : '' }}">
                        <label for="justificacion">Justificación</label>
                        <textarea class="form-control" id="justificacion" name="justificacion" required rows="5" >{{ old('justificacion') }}</textarea>
                          @if ($errors->has('justificacion'))
                              <span class="help-block">
                <strong>{{ $errors->first('justificacion') }}</strong>
                    </span>
                          @endif
                      </div>

          </div>
      </div>




    <button type="submit" class="btn btn-primary btn-block">Enviar Petición</button>

  </form>

@endsection
