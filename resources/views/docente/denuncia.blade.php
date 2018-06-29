@extends('docente.principal')
@section('content')
 <h1>peticiones denuncia</h1>
 <form action="{{route('denuncia.store')}}" method="POST">
  {{csrf_field()}}
      <div class="form-group">
        <label for="nombre">Nombre completo</label>
        <input class="form-control" id="nombre" type="text" name='nombre' readonly>
      </div>
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="Carnet">DUI</label>
            <input class="form-control" name='dui' id="dui" type="text" readonly>
          </div>
          <div class="col-md-6">
            <label for="exampleConfirmPassword">Email</label>
            <input class="form-control" id="email" type="text" readonly>
  
          </div>
        </div>
      </div>
  
      <div>
              <div class="form-group">
                      <label for="exampleInputFile">Anexe su archivo</label>
                      <input type="file" name="anexo" class="form-control-file" id="anexo" aria-describedby="fileHelp">
                      <small id="fileHelp" class="form-text text-muted">formato de archivo .pdf</small>
  
                    </div>
      </div>
          <button type="submit" class="btn btn-primary btn-block">Enviar Petición</a>
      
    </form>
@endsection