@extends('docente.principal')
@section('content')
<h1>Formulario peticiones especiales</h1>
<form action="{{route('peticiones-especiales.store')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    @include('partials.exito')
    <div class="form-group">
        <label for="nombre">Nombre completo</label>
        <input class="form-control" id="nombre" type="text" name='nombre' value="{{ $persona->nombre }}, {{ $persona->apellido }}" readonly>
    </div>
    <div class="form-group">
        <div class="form-row">
            <div class="col-md-6">
                <label for="Carnet">DUI</label>
                <input class="form-control" name='dui' id="dui" type="text" value="{{ $persona->dui }}" readonly>
            </div>
            <div class="col-md-6">
                <label for="exampleConfirmPassword">Email</label>
                <input class="form-control" id="email" type="text" value="{{ Auth::user()->email }}" readonly>

            </div>
        </div>
    </div>

    <div>
        <div class="form-group {{ $errors->has('anexo') ? ' has-error' : '' }}">
            <label for="exampleInputFile">Anexe su archivo</label>
            <input type="file" name="anexo[]" class="form-control" id="anexo" required autofocus multiple aria-describedby="fileHelp">
            @if($errors->has('anexo'))
                <span class="help-block">
                            <strong>{{$errors->first('anexo')}}</strong>
                        </span>
            @endif
            <small id="fileHelp" class="form-text text-muted">formato de archivo .pdf</small>

        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Enviar Petición</button>
        
</form>
    	
 
@endsection