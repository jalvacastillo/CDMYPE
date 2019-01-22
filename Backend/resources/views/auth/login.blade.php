@extends('layout')

@section('content')

<div class="container">
    <div class="row my-4">
        <div class="col-12">
            <div class="panel">
                <div class="panel-tittle"> <h4 class="text-center mt-2">Inicia Sesión</h4> </div>
                <div class="panel-body">
                    <div class="row" style="display: flex; justify-content: center;">
                        <div class="col-12 col-sm-6 col-md-5">
                            <form class="form" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="email">Correo:</label>
                                    <input id="email" type="email" class="form-control  {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="tu@correo.com">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña:</label>
                                    <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="contraseña">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group text-center">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Ingresar
                                    </button>

                                    <a class="btn text-secondary" href="{{ route('password.request') }}">
                                        Olvidaste tu contraseña?
                                    </a> <br>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 col-sm-6 col-md-5">
                            <label class="mb-3">O inicia sesión con:</label>
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
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

