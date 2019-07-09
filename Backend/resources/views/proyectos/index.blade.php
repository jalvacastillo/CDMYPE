@extends('layout')

@section('nombre')
  Proyectos
@endsection

@section('content')

    <div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Proyectos</h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="{{ url('/') }}">Inicio</a></li>
              <li>Proyectos</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <form action="{{ route('filtrarProyectos') }}" method="POST">
    <div class="row panel-footer" style="display: flex; justify-content: center;">
      {{ csrf_field() }}

      <div class="input-group" style="width: 75%;">
        <input type="text" name="parametro" class="form-control" placeholder="Tipo, Nombre, etc...">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Opciones <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              <li><a href="{{ route('empresas') }}">Todos los proyectos</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">Categoria</li>
              {{-- <li><a href="{{ route('proyectoCategoria', 'formacion') }}">Formación</a></li> --}}
              {{-- <li><a href="{{ route('proyectoCategoria', 'comercializacion') }}">Comercialización</a></li> --}}
              {{-- <li role="separator" class="divider"></li>
              <li class="dropdown-header">Tipo</li>
              <li><a href="{{ route('proyectoTipo', 'capacitacion') }}">Capacitaciones</a></li>
              <li><a href="{{ route('proyectoTipo', 'taller') }}">Talleres</a></li>
              <li><a href="{{ route('proyectoTipo', 'webinar') }}">Webinars</a></li> --}}
            </ul>
        </span>
      </div>
    </div>
    </form>


        <div id="content">
          <div class="container">
            <div class="page-content" id="pasantias">


                <div class="row list-group">
                
                @foreach($proyectos as $proyecto)
                <div class="col-xs-6">
                    <div class="list-group-item" style="margin-bottom: 15px;">
                        <div class="row">
                        <div class="media col-sm-3 hidden-xs">
                          <figure class="pull-left">
                              <img class="media-object img-rounded img-responsive"  src="{{ asset('/img/empresas/'. ($proyecto->empresas()->first()->logo ? $proyecto->empresas()->first()->logo : 'default.png')) }}" alt="" >
                          </figure>
                        </div>
                        <div class="col-sm-6">
                          <h2 class="list-group-item-heading"> {{ $proyecto->nombre }} </h2>
                          <p class="label label-info">{{ $proyecto->tipo }}</p>
                          <p class="label label-success">{{ $proyecto->especialidad }}</p>
                          <p class="list-group-item-text"> {{ $proyecto->descripcion }} </p>
                        </div>
                        <div class="col-sm-3 text-center">
                          <h4> {{ $proyecto->finalizacion }} <br><small>Fecha límite</small></h4>
                          
                          <h3> {{ $proyecto->duracion }} <br><small>Duración</small></h3>
                          <br><br>
                          <a href="{{ route('proyecto', [str_slug($proyecto->nombre), encrypt($proyecto->id) ]) }}" class="btn btn-primary btn-block"> Ver Más </a>
                        </div>
                        </div>
                    </div>
                </div>
                @endforeach

                </div>
                <div class="row">
                      <div class="col-xs-12 text-center">
                        {{ $proyectos->links() }}
                      </div>
                </div>

            </div>
          </div>
        </div>

        @include('home.accion-proyectos')

@endsection