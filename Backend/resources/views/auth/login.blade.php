@extends('layout')

@section('content')

<div class="container-fluid" style="background: #f5f5f5;">
    <div class="row">
        <div class="col-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-md-offset-3">
                            <h4 class="text-center classic-title"><span>Iniciar Sesión</span></h4>
                            <form  method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}


                                <div class="form-group col-xs-12">
                                    <label for="email">Correo:</label>
                                    <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="tu@correo.com" required>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-xs-12">
                                    <label for="password">Contraseña:</label>
                                    <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-xs-12">
                                    <div class="form-group text-center">
                                        <br>
                                        <button type="submit" class="btn btn-primary btn-block">
                                            Entrar
                                        </button>
                                        <label class="mb-3">O ingresa con:</label>
                                        <a href="{{ route('social.auth', 'facebook') }}" class="btn btn-info btn-block">
                                            <span class="fa fa-facebook fa-fw"></span> Facebook
                                        </a>

                                        <a href="{{ route('social.auth', 'google') }}" class="btn btn-danger btn-block">
                                            <span class="fa fa-google fa-fw"></span> Google
                                        </a>
                                        <a href="{{ route('register') }}" class="btn btn-default btn-block">
                                            <span class="fa fa-envelope fa-fw"></span> Crear cuenta
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

