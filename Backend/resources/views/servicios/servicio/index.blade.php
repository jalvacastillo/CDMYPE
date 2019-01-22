@extends('layout')

@section('titulo')
  {{ $servicio->nombre }}
@endsection

@section('content')
    
    <div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>{{ $servicio->nombre }}</h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="{{ route('inicio') }}">Inicio</a></li>
              <li><a href="{{ route('servicios') }}">Servicios</a></li>
              <li>{{ $servicio->nombre }}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div id="content">
        <div class="container">
            <div class="page-content">
                <div class="row">
                 <div class="col-md-12  text-center">
                      <img src="{{ asset('img/servicios/'. $servicio->img) }}" alt="{{ $servicio->nombre }}" style="height: 150px;">
                      <h3> <br> {{ $servicio->nombre }}</h3>
                      <p> <br> {{ $servicio->descripcion }}</p>
                 </div>
                </div>


               <div class="row">
               <h2 class="classic-title text-center"><span>Acciones</span></h2>
                 @foreach ($servicio->acciones as $accion)
                 <div class="col-xs-6 col-md-3 image-service-box">
                   <h3>{{ $accion->nombre }}</h3>
                   <p>{{ $accion->descripcion }}</p>
                   <a href="{{ route('accion', [$servicio->slug, str_slug($accion->nombre)]) }}">Más información <i class="fa fa-angle-right"></i></a>
                 </div>
                 @endforeach
               </div>


               <div class="row">
               <h2 class="classic-title text-center"><span>Asesores</span></h2>
                 
                @foreach ($servicio->asesores as $asesor)
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member">
                      <div class="member-photo">
                        <img alt="" src="{{ asset('/img/team/'. $asesor->avatar) }}" style="height:250px;" />
                        <div class="member-name">{{ $asesor->nombre }} <span>{{ $asesor->cargo }}</span></div>
                      </div>
                      <div class="member-info" style="min-height: 100px;">
                        <p>{{ str_limit($asesor->titulo, 70, '...') }}</p>
                      </div>
                      <div class="member-socail">
                        @if ($asesor->asesor()->first()->url_linkedin)
                          <a class="linkedin" href="{{ $asesor->asesor()->first()->url_linkedin }}" target="_black"><i class="fa fa-linkedin"></i></a>
                        @endif
                        @if ($asesor->asesor()->first()->url_facebook)
                          <a class="facebook" href="{{ $asesor->asesor()->first()->url_facebook }}" target="_black"><i class="fa fa-facebook"></i></a>
                        @endif
                        @if ($asesor->asesor()->first()->url_twitter)
                          <a class="facebook" href="{{ $asesor->asesor()->first()->url_twitter }}" target="_black"><i class="fa fa-twitter"></i></a>
                        @endif
                        @if ($asesor->asesor()->first()->email)
                          <a class="mail" href="mailto:{{ $asesor->asesor()->first()->email }}" target="_black"><i class="fa fa-envelope"></i></a>
                        @endif

                      </div>
                      <br>
                    </div>
                </div>
                @endforeach

               </div>

            </div>
        </div>
    </div>

@endsection