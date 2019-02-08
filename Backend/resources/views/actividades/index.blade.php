@extends('layout')

@section('nombre')
  Actividades
@endsection

@section('content')

    <div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Actividades</h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="{{ url('/') }}">Inicio</a></li>
              <li>Actividades</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <form action="{{ route('filtrarActividades') }}" method="POST">
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
              <li><a href="{{ route('actividades') }}">Todas las actividades</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">Categorias</li>
              <li><a href="{{ route('actividadesCategoria', 'formacion') }}">Formación</a></li>
              <li><a href="{{ route('actividadesCategoria', 'comercializacion') }}">Comercialización</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">Tipo</li>
              <li><a href="{{ route('actividadesTipo', 'capacitacion') }}">Capacitaciones</a></li>
              <li><a href="{{ route('actividadesTipo', 'taller') }}">Talleres</a></li>
              <li><a href="{{ route('actividadesTipo', 'webinar') }}">Webinars</a></li>
            </ul>
        </span>
      </div>
    </div>
    </form>


        {{-- <div id="content"> --}}
          <div class="container">
            <div class="row col-xs-12 text-center" style="margin: 15px 0px;">
              <div class="btn-group">
                <a href="{{ route('actividades') }}" class="btn btn-default {{ Route::is('actividades') ? 'active' : null }}">Listado</a>
                <a href="{{ route('actividadesCalendario') }}"class="btn btn-default {{ Route::is('actividadesCalendario') ? 'active' : null }}">Calendario</a>
              </div>
            </div>
            <div class="page-content" id="pasantias">

                <div class="row list-group">
                
                @foreach($actividades as $actividad)
                    <div class="list-group-item col-md-8 col-md-offset-2" style="margin-bottom: 15px;">
                        <div class="row">
                        <div class="media col-sm-2 hidden-xs">
                          <figure class="pull-left">
                              <img class="media-object img-responsive"  src="{{ asset('img/actividades/'. $actividad->img) }}" alt="" >
                          </figure>
                        </div>
                        <div class="col-sm-7">
                          <h2 class="list-group-item-heading"> {{ $actividad->nombre }} </h2>
                          <p class="label label-info">{{ $actividad->tipo }}</p>
                          <p class="label label-success">{{ $actividad->categoria }}</p>
                          <p class="list-group-item-text"> {{ $actividad->descripcion }} </p>
                          <p class="row">
                            <div class="col-xs-6">
                            <b>Inicia:</b> <br>
                            {{ strftime('%A, %e de %B del %Y', strtotime($actividad->inicio)) }}
                            <br>
                            {{ strftime('%I:%M:%S %p', strtotime($actividad->inicio)) . ((strftime('%H:%M:%S', strtotime($actividad->inicio)) % 86400) < 43200 ? 'AM' : 'PM') }} 
                            </div>
                            <div class="col-xs-6">
                              <b>Finaliza:</b> <br>
                            {{ strftime('%A, %e de %B del %Y', strtotime($actividad->fin)) }}
                            <br>
                            {{ strftime('%I:%M:%S %p', strtotime($actividad->fin)) . ((strftime('%I:%M:%S', strtotime($actividad->fin)) % 86400) < 43200 ? 'AM' : 'PM') }} 
                            </div>
                          </p>
                        </div>
                        <div class="col-sm-3 text-center">
                          <h5>{{ $actividad->cupo}} <br> Cupos</h5>
                          <h5>{{ $actividad->total_aplicaciones}} <br> Aplicaciones</h5>
                          <h5>{{ $actividad->cupo - $actividad->total_aplicaciones}} <br> Disponibles</h5>
                          <a href="{{ route('actividad', [str_slug($actividad->nombre), encrypt($actividad->id) ]) }}" class="btn btn-primary btn-block"> Me interesa </a>
                        </div>
                        </div>
                    </div>
                @endforeach

                </div>
                <div class="row">
                      <div class="col-xs-12 text-center">
                        {{ $actividades->links() }}
                      </div>
                </div>

            </div>
          </div>
        {{-- </div> --}}

        @include('home.accion-proyectos')

@endsection