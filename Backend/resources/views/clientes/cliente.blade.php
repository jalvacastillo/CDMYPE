@extends('layout')

@section('titulo')
  Cliente
@endsection

@section('content')

    @include('clientes.title')

    <div id="content">
      <div class="container">
        <div class="page-content">

          <div class="row well">
              <div class="col-sm-12 text-center">
                  <img src="{{ asset('/img/clientes/'. $cliente->logo) }}" alt="Logo {{ $cliente->empresa()->first()->nombre }}" class="img-rounded img-responsive" style="margin: auto; margin-bottom: 30px; height: 150px; margin-top: -100px;" />
                  <h2> {{ $cliente->empresa()->first()->nombre }}</h2>
                  <cite title="{{ $cliente->empresa()->first()->sector }}"> {{ $cliente->empresa()->first()->sector }} </i></cite>
                  <br>
                  <p> <span class="label label-info">{{ $cliente->empresa()->first()->actividad }}</span> </p>
                  <a href="mailto:{{ $cliente->empresario()->first()->correo }}" class="btn btn-primary" title="Enviar un correo eléctronico"><i class="fa fa-envelope"></i></a>
                  <a href="tel:{{ $cliente->empresario()->first()->telefono }}" class="btn btn-primary" title="LLamar por teléfono"><i class="fa fa-phone"></i></a>
              </div>
              <div class="col-sm-12">
                  <br><h3>Contactos:</h3><br>
                <ul class="list-group">
                  @if ($cliente->empresario()->first()->correo)
                  <li class="list-group-item col-md-4" href="#">
                    <p class="m-0"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i> {{ $cliente->empresario()->first()->correo }}</p>
                  </li>
                  @endif
                  <li class="list-group-item col-md-4" href="#">
                    <p class="m-0"><i class="fa fa-globe fa-fw" aria-hidden="true"></i> {{ $cliente->empresa()->first()->municipio }}</p>
                  </li>
                  @if ($cliente->empresario()->first()->telefono)
                  <li class="list-group-item col-md-4" href="#">
                    <p class="m-0"><i class="fa fa-phone fa-fw" aria-hidden="true"></i> {{ $cliente->empresario()->first()->telefono }}</p>
                  </li>
                  @endif
                  @if ($cliente->url_web)
                    <li class="list-group-item col-md-4" target="_blank" href="{{ $cliente->url_web }}">
                      <p class="m-0"><i class="fa fa-globe fa-fw" aria-hidden="true"></i> {{ $cliente->url_web }}</p>
                    </li>
                  @endif
                  @if ($cliente->url_facebook)
                    <li class="list-group-item col-md-4" target="_blank" href="{{ $cliente->url_facebook }}">
                      <p class="m-0"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i> {{ $cliente->url_facebook }}</p>
                    </li>
                  @endif
                </ul>
              </div>
              <div class="col-sm-12">
                <br><h3>Descripción:</h3><br>
                <ul class="list-group">
                  <li class="list-group-item" href="#">
                    <p class="text-justify">{{ $cliente->empresa()->first()->descripcion }}</p>
                  </li>
                </ul>
              </div>
              <div class="col-sm-12">
                @if ($cliente->productos->count() > 0)
                  <br><h3>Productos:</h3><br>
                  <div class="row list-group">
                    @foreach ($cliente->productos as $producto)
                    <div class="col-xs-3 text-center">
                      <div class="list-group-item">
                        <img src="{{ asset('/img/clientes/productos/'. $producto->img) }}" alt="{{ $producto->nombre }}">
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
                  <a href="mailto:{{ $cliente->empresario()->first()->correo }}" class="btn btn-primary" title="Enviar un correo eléctronico"><i class="fa fa-envelope"></i></a>
                  <a href="tel:{{ $cliente->empresario()->first()->telefono }}" class="btn btn-primary" title="LLamar por teléfono"><i class="fa fa-phone"></i></a>
              </div>
          </div>

        </div>
      </div>
    </div>

@endsection