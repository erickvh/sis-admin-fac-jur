@extends('administracion.principal')
@section('content')
            <div class="col-md-8 col-md-offset-2">
                   <h1>Registro de Usuarios</h1>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('registro.store') }}">
                            {{ csrf_field() }}
                            @include('partials.exito')

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                        <label for="nombre" class="col-md-4 control-label">Nombre:</label>
                                        <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}"  autofocus placeholder="Ingrese sus nombres" maxlength="60" onkeypress="return validaC(event)" required>

                                        @if ($errors->has('nombre'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6{{ $errors->has('apellido') ? ' has-error' : '' }}">
                                        <label for="apellido" class="col-md-4 control-label">Apellido:</label>
                                        <input id="apellido" type="text" class="form-control" name="apellido" value="{{ old('apellido') }}"  placeholder="Ingrese sus apellidos" maxlength="60" onkeypress="return validaC(event)" required>

                                        @if ($errors->has('apellido'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('apellido') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6{{ $errors->has('dui') ? ' has-error' : '' }}">
                                        <label for="dui" class="col-md-4 control-label">DUI:</label>
                                        <input id="dui" type="text" class="form-control" name="dui" value="{{ old('dui') }}" placeholder="Ingrese DUI en caso de tenerlo" onkeyup="guion()" onkeypress="return valida(event)" maxlength="10" required>

                                        @if ($errors->has('dui'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('dui') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6{{ $errors->has('nacimiento') ? ' has-error' : '' }}">
                                        <label for="nacimiento" class="col-md-7 control-label">Fecha Nacimiento:</label>
                                        <input id="nacimiento" type="date" class="form-control" name="nacimiento" value="{{ old('nacimiento') }}" required>

                                        @if ($errors->has('nacimiento'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('nacimiento') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">Correo:</label>
                                        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}"  placeholder="Ingresa su correo" maxlength="50" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }} </strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6{{ $errors->has('sexo') ? ' has-error' : '' }}">
                                        <label for="sexo" class="col-md-4 control-label">Sexo:</label>
                                        <select name="sexo" class="form-control">
                                            <option value="F" {{ (old('sexo') == 'F' ? " selected" : "") }}>Femenino</option>
                                            <option value="M" {{ (old('sexo') == 'M' ? " selected" : "") }}>Masculino</option>
                                        </select>

                                        @if ($errors->has('sexo'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('sexo') }} </strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-row">
                                    <label class="col-md-6 control-label" for="rol">Rol a desempeñar</label>
                                    <select class="form-control" id="rol" name="rol">
                                        @foreach($roles as $role)
                                            @if($role->id != 1)
                                            <option value="{{ $role->id }}" {{ (old('rol') == $role->id ? " selected" : "") }}>{{ $role->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registrar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <script>
                function guion() {
                    var dui = document.getElementById('dui');
                    if(dui.value.length == 8){
                        dui.value += '-';
                    }
                }

                function valida(e){
                    tecla = (document.all) ? e.keyCode : e.which;

                    //Tecla de retroceso para borrar, siempre la permite
                    if (tecla==8){
                        return true;
                    }

                    // Patron de entrada, en este caso solo acepta numeros
                    patron =/[0-9]/;
                    tecla_final = String.fromCharCode(tecla);
                    return patron.test(tecla_final);
                }
                function validaC(e){
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