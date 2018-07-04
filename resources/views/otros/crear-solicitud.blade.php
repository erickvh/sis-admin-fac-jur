@extends('otros.principal')

@section('content')
<h1>Peticiones</h1>
<form action="{{route('peticion.store')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    @if(session('status'))
    <div class="alert alert-info">
        {{session('status')}}
    </div>
@endif
    <div class="form-group">
            <label for="nombre">Nombre completo</label>
    <input class="form-control" id="nombre" type="text" value='{{$persona->nombre}} {{$persona->apellido}}' readonly>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="dui" >DUI</label>
              <input class="form-control" id="carnet" type="text" value='{{$persona->dui}}' readonly>
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Email</label>
                <input class="form-control" id="email" type="text" value="{{$user->email}}" readonly>
      
              </div>
            </div>
          </div>
      <div>
        <div class='form-group'>
          <div class="form-row">
              <div class="col-md-6{{ $errors->has('asunto') ? ' has-error' : '' }}">
                <label for="dui"> Asunto: </label>
              <input class="form-control" id="asunto" name=asunto type="text" value='{{ old('asunto') }}'>
              @if ($errors->has('asunto'))
              <span class="help-block">
              <strong>{{ $errors->first('asunto') }}</strong>
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
            </div>
            <button type="submit" class="btn btn-primary btn-block">Enviar Petición</a>
        
      </form>
    	
 
@endsection