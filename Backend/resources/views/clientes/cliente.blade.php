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
              <div class="col-sm-6 col-md-4">
                  <img src="{{ asset('/img/clientes/'. $cliente->logo) }}" alt="Logo {{ $cliente->empresa()->first()->nombre }}" class="img-rounded img-responsive" />
              </div>
              <div class="col-sm-6 col-md-8">
                  <h2> {{ $cliente->empresa()->first()->nombre }}</h2>
                  <cite title="{{ $cliente->empresa()->first()->sector }}"> {{ $cliente->empresa()->first()->sector }} </i></cite>
                  <br>
                  <p> <span class="label label-info">{{ $cliente->empresa()->first()->actividad }}</span> </p>
                    
                    Contactos:
                  <div class="list-group">
                    <a class="list-group-item" href="#"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i>
                      &nbsp; {{ $cliente->empresario()->first()->correo }}
                    </a>
                    <a class="list-group-item" href="#"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>
                      &nbsp; {{ $cliente->empresa()->first()->municipio }}
                    </a>
                    <a class="list-group-item" href="#"><i class="fa fa-phone fa-fw" aria-hidden="true"></i>
                      &nbsp; {{ $cliente->empresario()->first()->telefono }}
                    </a>
                    @if ($cliente->url_web)
                      <a class="list-group-item" target="_blank" href="{{ $cliente->url_web }}"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>
                        &nbsp; {{ $cliente->url_web }}
                      </a>
                    @endif
                    @if ($cliente->url_facebook)
                      <a class="list-group-item" target="_blank" href="{{ $cliente->url_facebook }}"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i>
                        &nbsp; {{ $cliente->url_facebook }}
                      </a>
                    @endif
                  </div>
                  Descripción:
                  <div class="list-group">
                    <a class="list-group-item" href="#">
                      {{ $cliente->empresa()->first()->descripcion }}
                    </a>
                  </div>

                  @if ($cliente->productos->count() > 0)
                    Productos:
                    <div class="list-group">
                      @foreach ($cliente->productos as $producto)
                      <a class="list-group-item" href="#">
                        {{ $producto->nombre }}
                        @if ($producto->precio), Precio: $ {{ number_format($producto->precio, 2, '.', ',') }} @endif
                        @if ($producto->descripcion), Detalle: {{ $producto->descripcion }} @endif
                      </a>
                      @endforeach
                    </div>
                  @endif

              </div>
          </div>

        </div>
      </div>
    </div>

@endsection