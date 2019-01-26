<div class="row">
<div class="col-md-8 col-md-offset-2">
<h2>Aplicaciones: </h2>
@foreach($historial as $aplicacion)
    <div class="list-group-item">
        <div class="row">
        <div class="media col-sm-3 hidden-xs">
          <figure class="pull-left">
              <img class="media-object img-rounded img-responsive"  src="{{ asset('img/empresas/'. $aplicacion->proyecto()->first()->empresas()->first()->logo) }}" alt="" >
          </figure>
        </div>
        <div class="col-sm-6">
          <h2 class="list-group-item-heading"> {{ $aplicacion->proyecto()->first()->nombre }} </h2>
          <p class="label label-info">{{ $aplicacion->proyecto()->first()->tipo }}</p>
          <p class="label label-success">{{ $aplicacion->proyecto()->first()->especialidad }}</p>
          <p class="list-group-item-text"> {{ $aplicacion->proyecto()->first()->descripcion }} </p>
        </div>
        <div class="col-sm-3 text-center">
          <h4> {{ $aplicacion->estado }} <br><small>Estado</small></h4>
          
          <h3> {{ $aplicacion->fecha }} {{ $aplicacion->hora }} <br><small>Fecha de aplicación</small></h3>
          <br><br>
          <a href="{{ route('proyecto', [str_slug($aplicacion->proyecto()->first()->nombre), encrypt($aplicacion->proyecto()->first()->id) ]) }}" class="btn btn-primary btn-block"> Ver proyecto </a>
        </div>
        </div>
    </div>
@endforeach
</div>
</div>