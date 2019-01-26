@extends('layout')

@section('content')

<div class="container">
    <div class="row my-4">
        <div class="col-12">
            <div class="card">
                <div class="card-tittle"> <h4 class="text-center mt-2">Registro</h4> </div>
                <div class="card-body">
                    <div class="row" style="display: flex; justify-content: center;">
                        <div class="col-12 col-sm-6 col-md-5">
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="name">Nombre:</label>
                                    <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="nombre" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="email">Correo:</label>
                                    <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="tu@correo.com" required>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="tipo">Tipo:</label>
                                    <select id="tipo" type="email" class="form-control {{ $errors->has('tipo') ? ' is-invalid' : '' }}" name="tipo" value="{{ old('tipo') }}" required>
                                        <option value="Empresario"> Empresario </option>
                                        <option value="Consultor"> Consultor </option>
                                        <option value="Estudiante"> Estudiante </option>
                                    </select>
                                    @if ($errors->has('tipo'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('tipo') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="password">Contraseña:</label>
                                    <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="contraseña" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm">Confirmar Contraseña:</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="contraseña" required>
                                </div>
                                <div class="form-group form-check">
                                   <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                   <label class="form-check-label" for="exampleCheck1">Quiero recibir ofertas y noticias por correo.</label>
                                </div>
                                <div class="form-group form-check">
                                   <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                   <label class="form-check-label" for="exampleCheck1">Acepto los <a class="{{ route('terminos') }}">Terminos y Condiciones.</a></label>
                                </div>
                                <div class="form-group">
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            Registrarme
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 col-sm-6 col-md-5">
                            <label class="mb-3">O registrate con:</label>
                            <a href="{{ route('social.auth', 'facebook') }}" class="btn btn-info btn-block">
                                <span class="fa fa-facebook fa-fw"></span> Facebook
                            </a>

                            <a href="{{ route('social.auth', 'google') }}" class="btn btn-danger btn-block">
                                <span class="fa fa-google fa-fw"></span> Google
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

