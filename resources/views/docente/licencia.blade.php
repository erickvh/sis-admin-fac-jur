@extends('docente.principal')
@section('content')
    <h1>Licencia incapacidad</h1>
<form action="{{route('licencia.store')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    @if(session('status'))
        <div class="alert alert-info">
            {{session('status')}}
        </div>
    @endif
        <div class="form-group">
          <label for="nombre">Nombre completo</label>
          <input class="form-control" id="nombre" type="text" value="{{ $persona->nombre }}, {{ $persona->apellido }}" readonly>
        </div>
        <div class="form-group">
          <div class="form-row">
    
            <div class="col-md-6">
              <label for="exampleConfirmPassword">Email</label>
              <input name="email" class="form-control" id="email" type="text" value="{{Auth::user()->email}}" readonly>
    
            </div>
            
            <div class="col-md-6">
                <label for="exampleConfirmPassword">DUI</label>
                <input name="dui" class="form-control" id="dui" type="text" value="{{$persona->dui}}" readonly>
      
              </div>
          </div>
        </div>
        <div class="form-group">
            <div class="form-row">
              <div class="col-md-6{{ $errors->has('fechaInicio') ? ' has-error' : '' }}">
                <label for="fechaInicio">fecha inicio</label>
                <input class="form-control" id="fechaInicio" type="date" name="fechaInicio" value="{{old('fechaInicio')}}" required autofocus>
                  @if ($errors->has('fechaInicio'))
                      <span class="help-block">
                <strong>{{ $errors->first('fechaInicio') }}</strong>
                    </span>
                  @endif
              </div>
              <div class="col-md-6{{ $errors->has('fechaFin') ? ' has-error' : '' }}">
                <label for="fechaFin">fecha fin</label>
                <input class="form-control" id="fechaFin" type="date" name="fechaFin" value="{{old('fechaFin')}}" required>
                  @if ($errors->has('fechaFin'))
                      <span class="help-block">
                <strong>{{ $errors->first('fechaFin') }}</strong>
                    </span>
                  @endif
              </div>
                      </div>
        
    
          </div>
                          <div class="form-group{{ $errors->has('anexo') ? ' has-error' : '' }}">
                              <label for="exampleInputFile">Anexe su archivo</label>
                              <input type="file" name="anexo[]" class="form-control" id="anexo" multiple required aria-describedby="fileHelp">
                              @if($errors->has('anexo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('anexo') }}</strong>
                                  </span>
                              @endif
                              <small id="fileHelp" class="form-text text-muted">formato de archivo .pdf</small>
          
                            </div>
    <button type="submit" class="btn btn-primary btn-block">Enviar Petición</button>
        
      </form>
        
 
@endsection