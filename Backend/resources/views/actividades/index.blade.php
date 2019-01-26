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
        <div class="form-group" style="margin: 0px 15px; width: 50%;">
            <input type="text" name="parametro" class="form-control form-control-sm" placeholder="Tipo, Nombre, etc...">
        </div>

      <div class="form-group" style="margin: 0px 15px; width: 10%">
        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
        <button type="{{ route('empresas') }}" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
      </div>
    </div>
    </form>


        <div id="content">
          <div class="container">
            <div class="page-content" id="pasantias">


                <div class="row list-group">
                
                @foreach($actividades as $proyecto)
                    <div class="list-group-item col-xs-6">
                        <div class="row">
                        <div class="media col-sm-3 hidden-xs">
                          <figure class="pull-left">
                              <img class="media-object img-rounded img-responsive"  src="{{ asset('img/empresas/'. $proyecto->empresas()->first()->logo) }}" alt="" >
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
                @endforeach

                </div>
                <div class="row">
                      <div class="col-xs-12 text-center">
                        {{ $actividades->links() }}
                      </div>
                </div>

            </div>
          </div>
        </div>

        @include('home.accion-proyectos')

@endsection