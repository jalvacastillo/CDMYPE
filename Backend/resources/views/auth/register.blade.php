@extends('layout')

@section('content')

<div class="container-fluid" style="background: #f5f5f5;">
    <div class="row">
        <div class="col-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-md-offset-3">
                            <h4 class="text-center classic-title"><span>Registro</span></h4>
                            <form  method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                <div class="form-group col-sm-12">
                                    <label for="name">Nombre:</label>
                                    <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nombre y Apellido" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="email">Correo:</label>
                                    <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="tu@correo.com" required>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="tipo">Tipo:</label>
                                    <select id="tipo" class="form-control {{ $errors->has('tipo') ? ' is-invalid' : '' }}" name="tipo" value="{{ old('tipo') }}" required>
                                        <option selected disabled> Tipo </option>
                                        <option value="Empresario"> Empresario </option>
                                        <option value="Consultor"> Consultor </option>
                                        <option value="Estudiante"> Estudiante/Asesor Junior </option>
                                    </select>
                                    @if ($errors->has('tipo'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('tipo') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="password">Contraseña:</label>
                                    <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="password-confirm">Confirmar Contraseña:</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirma la contraseña" required>
                                </div>
                                <div class="form-group form-check col-xs-12 text-center">
                                   <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                   <label class="form-check-label" for="exampleCheck1">Quiero recibir noticias por correo </label>
                                   <input type="checkbox" style="margin-left: 15px;" class="form-check-input" id="exampleCheck1">
                                   <label class="form-check-label" for="exampleCheck1"> Acepto los <a target="_blank" class="{{ route('terminos') }}">Terminos y Condiciones.</a></label>
                                </div>
                                <div class="form-group col-xs-12">
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            Registrarme
                                        </button>
                                        <label class="mb-3">O registrate con:</label>
                                        <a href="{{ route('social.auth', 'facebook') }}" class="btn btn-info btn-block">
                                            <span class="fa fa-facebook fa-fw"></span> Facebook
                                        </a>

                                        <a href="{{ route('social.auth', 'google') }}" class="btn btn-danger btn-block">
                                            <span class="fa fa-google fa-fw"></span> Google
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

