@extends('layout')

@section('titulo')
  Pasantias
@endsection

@section('content')

    @include('pasantias.title')

        <div id="content">
          <div class="container">
            <div class="page-content" id="pasantias">


                <div class="row list-group">
                
                @foreach($pasantias as $pasantia)
                    <a href="#" class="list-group-item">
                        <div class="media col-sm-3 hidden-xs">
                          <figure class="pull-left">
                              <img class="media-object img-rounded img-responsive"  src="http://placehold.it/350x250" alt="" >
                          </figure>
                        </div>
                        <div class="col-sm-6">
                          <h2 class="list-group-item-heading"> {{ $pasantia->titulo }} </h2>
                          <p class="label label-info">{{ $pasantia->tipo }}</p>
                          <p class="label label-success">{{ $pasantia->especialidad }}</p>
                          <p class="list-group-item-text"> {{ $pasantia->descripcion }} </p>
                        </div>
                        <div class="col-sm-3 text-center">
                          <h4> {{ $pasantia->finalizacion }} <br><small>Fecha límite</small></h4>
                          
                          <h4> {{ $pasantia->duracion }} <br><small>Duración</small></h4>
                          
                          {{-- <button type="button" class="btn btn-default btn-block"> Más información </button> --}}
                          <button type="button" class="btn btn-primary btn-block"> Aplicar </button>
                        </div>
                    </a>
                @endforeach

                </div>
              <div class="text-center">
                {{ $pasantias->links() }}
              </div>

            </div>
          </div>
        </div>

@endsection