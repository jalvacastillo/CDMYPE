@extends('layout')

@section('nombre')
  Proyecto
@endsection

@section('content')

    <div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Aplicacion a Proyecto</h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="{{ url('/') }}">Inicio</a></li>
              <li>Proyecto</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

        <div id="content">
          <div class="container">
            <div class="page-content" id="pasantias">

              <form class="form" method="POST" action="{{ route('aplicarProyecto') }}">
                {{ csrf_field() }}
                <div class="row list-group">
                    
                    <div class="col-xs-12 text-center">
                        <h3><b>Proyecto:</b> {{ $proyecto->nombre }}</h3>
                    </div>
                    <p>Información personal:</p>
                    <div class="col-xs-12">
                        <form action="">
                            <div class="form-group">
                                <p><b>Nombre:</b></p>
                                <p>{{ $usuario->name }}</p>
                            </div>
                            <div class="form-group">
                                <p><b>Correo:</b></p>
                                <p>{{ $usuario->email }}</p>
                            </div>
                            <div class="form-group">
                                <p><b>Telefono:</b></p>
                                <p>{{ $usuario->consultor()->first()->telefono }}</p>
                            </div>
                        </form>
                    </div>
                    <p>Otros:</p>
                    <div class="col-xs-12">
                        <input type="hidden" class="form-control" name="proyecto_id" value="{{ $proyecto->id }}">
                        <div class="form-group">
                            <label for="">Nota</label>
                            <textarea name="nota" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col-xs-12">
                      <button type="submit" class="btn btn-primary">Aplicar</button>
                    </div>
                    
                </div>
              </form>
            </div>
          </div>
        </div>

@endsection