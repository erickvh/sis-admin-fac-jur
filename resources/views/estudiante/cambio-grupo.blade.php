@extends("estudiante.principal")

@section('content')
<form action="{{route('cambio-grupo.store')}}" method="POST">
{{csrf_field()}}
    <div class="form-group">
      <label for="nombre">Nombre completo</label>
      <input class="form-control" id="nombre" type="text"  readonly>
    </div>
    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6">
          <label for="Carnet">Carnet</label>
          <input class="form-control" id="carnet" type="text" readonly>
        </div>
        <div class="col-md-6">
          <label for="exampleConfirmPassword">Email</label>
          <input class="form-control" id="email" type="text" readonly>

        </div>
      </div>
    </div>
    <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="telefono">Telefono</label>
            <input class="form-control" id="telefono" type="text" name="telefono" placeholder="ingrese numero de telefono">
          </div>
          <div class="col-md-6">
            <label for="materia">Materia</label>
            <select class="form-control" name="materia">
              <option value="">a</option>
              <option value="">a</option>
              <option value="">a</option>
              <option value="">a</option>
            </select>
          </div>
        </div>
      </div>
      <div class="form-group">
          <div class="form-row">
            
            <div class="col-md-4">
              <label for="grupo">GT/GD/GL</label>
              <select class="form-control" name="tipoGrupo">
                <option value="GT">Grupo Teorico</option>
                <option value="GD">Grupo Discusión</option>
                <option value="GL">Grupo Laboratorio</option>
              </select>
            </div>
            <div class="col-md-4">
                <label for="numeroActual">Numero grupo actual</label>
                <input class="form-control" id="numeroActual" type="number" name="numeroActual" min="1" max="10" placeholder="Numero grupo actual">
              </div>
            <div class="col-md-4">
                  <label for="numeroDeseo">Numero grupo actual</label>
                  <input class="form-control" id="numeroDeseo" name="numeroDeseo" type="number" min="1" max="10" placeholder="Numero grupo que desea">
            </div>
          </div>
        </div>
        <div class="form-group">
            <label for="justificacion">Justificación</label>
            <textarea class="form-control" id="justificacion" name="justificacion" rows="3"></textarea>
          </div>
    <button type="submit" class="btn btn-primary btn-block">Enviar Petición</a>
    
  </form>

@endsection