@extends('docente.principal')
@section('content')


<h1>reclasificacion academica</h1>
<form action="{{route('reclasificacion.store')}}" method="POST">
{{csrf_field()}}
    @include('partials.exito')
<div class="form-group">
        <label for="nombre">Nombre completo</label>
        <input class="form-control" id="nombre" value="{{ $persona->nombre }}, {{ $persona->apellido }}" type="text"  readonly>
      </div>
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="dui">DUI</label>
            <input class="form-control" id="dui" type="text" value="{{ $persona->dui }}" readonly>
          </div>
          <div class="col-md-6">
            <label for="exampleConfirmPassword">Email</label>
            <input class="form-control" id="email" type="text" value="{{ Auth::user()->email }}" readonly>

          </div>
        </div>
      </div>
      <div class="form-group">
          <div class="form-row">
                      <div class="col-md-4{{ $errors->has('nivelActual') ? ' has-error' : '' }}">
                            <label for="nivelActual">Nivel actual</label>
                            <input class="form-control" id="nivelActual" name="nivelActual" type="number" min="1" max=3 value="{{old('nivelActual')}}" autofocus>
                          @if($errors->has('nivelActual'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nivelActual') }}</strong>
                            </span>
                          @endif
                      </div>
                      
                      <div class="col-md-4{{ $errors->has('nivelDeseado') ? ' has-error' : '' }}">
                            <label for="nivelDeseado">Nivel deseado</label>
                            <input class="form-control" id="nivelDeseado" name="nivelDeseado" type="number" min="1" max=3 value="{{old('nivelDeseado')}}">
                          @if($errors->has('nivelDeseado'))
                              <span class="help-block">
                                <strong>{{ $errors->first('nivelDeseado') }}</strong>
                            </span>
                          @endif
                      </div>

          </div>
      </div>
      <div class="form-group">
          <div class="form-row">
                <div class="col-md-4{{ $errors->has('fechaFin') ? ' has-error' : '' }}">
                        <label for="ciclo">Fecha de finalizacion</label>
                        <input class="form-control" type="date" name="fechaFin" value="{{old('fechaFin')}}">
                    @if($errors->has('fechaFin'))
                        <span class="help-block">
                                <strong>{{ $errors->first('fechaFin') }}</strong>
                            </span>
                    @endif
                      </div>

                      <div class="col-md-8{{ $errors->has('justificacion') ? ' has-error' : '' }}">
                        <label for="justificacion">Justificación</label>
                        <textarea class="form-control" id="justificacion" name="justificacion" rows="3">{{old('justificacion')}}</textarea>
                          @if($errors->has('justificacion'))
                              <span class="help-block">
                                <strong>{{ $errors->first('justificacion') }}</strong>
                            </span>
                          @endif
                      </div>

          </div>
      </div>




  <button type="submit" class="btn btn-primary btn-block">Enviar Petición</a>








@endsection