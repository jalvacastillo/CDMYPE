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
                  <img src="{{ asset('/img/clientes/'. $cliente->imagen) }}" alt="" class="img-rounded img-responsive" />
              </div>
              <div class="col-sm-6 col-md-8">
                  <h2>
                      {{ $cliente->empresa()->first()->nombre }}</h2>
                  <cite title="{{ $cliente->empresa()->first()->municipio }}">
                    {{ $cliente->empresa()->first()->municipio }} <i class="fa fa-map-marker">
                    </i></cite>
                  <p>
                    <span class="label label-info">{{ $cliente->empresa()->first()->sector }}</span>
                  </p>
                  <p>
                     {{ $cliente->empresa()->first()->actividad }}                     
                  </p>

                  <div class="list-group">
                    <a class="list-group-item" href="#"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i>&nbsp; {{ $cliente->empresario()->first()->correo }}</a>
                    <a class="list-group-item" href="#"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>&nbsp; {{ $cliente->empresa()->first()->municipio }}</a>
                    <a class="list-group-item" href="#"><i class="fa fa-phone fa-fw" aria-hidden="true"></i>&nbsp; {{ $cliente->empresario()->first()->telefono }}</a>
                  </div>

              </div>
          </div>

        </div>
      </div>
    </div>

@endsection