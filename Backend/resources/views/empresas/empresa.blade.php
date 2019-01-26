@extends('layout')

@section('titulo')
  Empresa {{ $empresa->nombre }}
@endsection

@section('content')

    <div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Empresas</h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="{{ url('/') }}">Inicio</a></li>
              <li>Empresas</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div id="content">
      <div class="container">
        <div class="page-content">

          <div class="row well">
              <div class="col-sm-12 text-center">
                  <img src="{{ asset('/img/empresas/'. $empresa->logo) }}" alt="Logo {{ $empresa->nombre }}" class="img-rounded img-responsive" style="margin: auto; margin-bottom: 30px; height: 150px; margin-top: -30px;" />
                  <h2> {{ $empresa->nombre }}</h2>
                  <cite title="{{ $empresa->sector }}"> {{ $empresa->sector }} </i></cite>
                  <br>
                  <p> <span class="label label-info">{{ $empresa->actividad }}</span> </p>
                  <a href="mailto:{{ $empresa->correo }}" class="btn btn-primary" title="Enviar un correo eléctronico"><i class="fa fa-envelope"></i></a>
                  <a href="tel:{{ $empresa->telefono }}" class="btn btn-primary" title="LLamar por teléfono"><i class="fa fa-phone"></i></a>
              </div>
              <div class="col-sm-12">
                  <br><h3>Contactos:</h3><br>
                <ul class="list-group">
                  @if ($empresa->correo)
                  <li class="list-group-item col-md-4" href="#">
                    <p class="m-0"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i> {{ $empresa->correo }}</p>
                  </li>
                  @endif
                  <li class="list-group-item col-md-4" href="#">
                    <p class="m-0"><i class="fa fa-globe fa-fw" aria-hidden="true"></i> {{ $empresa->municipio }}</p>
                  </li>
                  @if ($empresa->telefono)
                  <li class="list-group-item col-md-4" href="#">
                    <p class="m-0"><i class="fa fa-phone fa-fw" aria-hidden="true"></i> {{ $empresa->telefono }}</p>
                  </li>
                  @endif
                  @if ($empresa->url_web)
                    <li class="list-group-item col-md-4" target="_blank" href="{{ $empresa->url_web }}">
                      <p class="m-0"><i class="fa fa-globe fa-fw" aria-hidden="true"></i> {{ $empresa->url_web }}</p>
                    </li>
                  @endif
                  @if ($empresa->url_facebook)
                    <li class="list-group-item col-md-4" target="_blank" href="{{ $empresa->url_facebook }}">
                      <p class="m-0"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i> {{ $empresa->url_facebook }}</p>
                    </li>
                  @endif
                </ul>
              </div>
              <div class="col-sm-12">
                <br><h3>Descripción:</h3><br>
                <ul class="list-group">
                  <li class="list-group-item" href="#">
                    <p class="text-justify">{{ $empresa->descripcion }}</p>
                  </li>
                </ul>
              </div>
              <div class="col-sm-12">
                @if ($empresa->productos->count() > 0)
                  <br><h3>Productos:</h3><br>
                  <div class="row list-group">
                    @foreach ($empresa->productos as $producto)
                    <div class="col-xs-3 text-center">
                      <div class="list-group-item">
                        <img src="{{ asset('/img/empresas/productos/'. $producto->img) }}" alt="{{ $producto->nombre }}">
                        <p><b>{{ $producto->nombre }}</b></p>
                        @if ($producto->precio)
                          <p class="text-justify m-0"><b>$ {{ number_format($producto->precio, 2, '.', ',') }}</b></p>
                        @endif
                        @if ($producto->descripcion)
                          <p class="text-justify m-0 text-muted">{{ $producto->descripcion }}</p>
                        @endif
                      </div>
                    </div>
                    @endforeach
                  </div>
                @endif

              </div>

              <div class="col-xs-12 text-center">
                  <a href="mailto:{{ $empresa->correo }}" class="btn btn-primary" title="Enviar un correo eléctronico"><i class="fa fa-envelope"></i></a>
                  <a href="tel:{{ $empresa->telefono }}" class="btn btn-primary" title="LLamar por teléfono"><i class="fa fa-phone"></i></a>
              </div>
          </div>

        </div>
      </div>
    </div>

@endsection