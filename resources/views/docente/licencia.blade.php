@extends('docente.principal')
@section('content')
<form action="{{route('licencia.store')}}" method="POST">
    {{csrf_field()}}
    <h1>Licencia incapacidad</h1>
        <div class="form-group">
          <label for="nombre">Nombre completo</label>
          <input class="form-control" id="nombre" type="text"  readonly>
        </div>
        <div class="form-group">
          <div class="form-row">
    
            <div class="col-md-6">
              <label for="exampleConfirmPassword">Email</label>
              <input name="email" class="form-control" id="email" type="text" readonly>
    
            </div>
            
            <div class="col-md-6">
                <label for="exampleConfirmPassword">DUI</label>
                <input name="dui" class="form-control" id="dui" type="text" readonly>
      
              </div>
          </div>
        </div>
        <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="fechaInicio">fecha inicio</label>
                <input class="form-control" id="fechaInicio" type="date" name="fechaInicio" >
              </div>
              <div class="col-md-6">
                <label for="fechaFin">fecha fin</label>
                <input class="form-control" id="fechaFin" type="date" name="fechaFin" >
              </div>
                      </div>
        
    
          </div>
                          <div class="form-group">
                              <label for="exampleInputFile">Anexe su archivo</label>
                              <input type="file" name="anexo" class="form-control-file" id="anexo" aria-describedby="fileHelp">
                              <small id="fileHelp" class="form-text text-muted">formato de archivo .pdf</small>
          
                            </div>
        <button type="submit" class="btn btn-primary btn-block">Enviar Petición</a>
        
      </form>
        
 
@endsection