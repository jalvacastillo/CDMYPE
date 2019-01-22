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

        <div id="content">
          <div class="container">
            <div class="page-content" id="pasantias">


                <div class="row list-group">
                
                @foreach($proyectos as $proyecto)
                    <div class="list-group-item">
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
                          <a href="{{ route('aplicar', encrypt($proyecto->id)) }}" class="btn btn-primary btn-block"> Aplicar </a>
                          <a href="{{ route('proyecto', [str_slug($proyecto->nombre), encrypt($proyecto->id) ]) }}" class="btn btn-primary btn-block"> Más información </a>
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

@endsection