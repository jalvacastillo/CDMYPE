@extends('layout')

@section('titulo')
  {{ $accion->nombre }}
@endsection

@section('content')
    
    <div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>{{ $accion->nombre }}</h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="{{ route('inicio') }}">Inicio</a></li>
              <li><a href="{{ route('servicios') }}">Servicios</a></li>
              <li>{{ $accion->nombre }}</li>
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
                      <img src="{{ asset('img/servicios/'. $accion->servicio()->first()->img) }}" alt="{{ $accion->nombre }}" style="height: 150px;">
                      <h3> <br> {{ $accion->nombre }}</h3>
                      <p> <br> {{ $accion->descripcion }}</p>
                 </div>
                </div>


              {{--  <div class="row">
               <h2 class="classic-title text-center"><span>Resultados</span></h2>
                 @foreach($accion->resultados as $resultado)
                   <div class="col-md-4 post-row item">
                     <div class="left-meta-post">
                         <img src="{{ asset('img/noticias/'. $noticia->img) }}" alt="{{ $noticia->titulo }}" style="height: 150px;">
                     </div>
                     <h3 class="post-title"><a href="#">{{ $noticia->titulo }}</a></h3>
                     <div class="post-content">
                       <p class="text-justify">{{ str_limit($noticia->descripcion, 150,'...')}}
                         <br>
                       </p>
                       <p>
                         {{ $noticia->created_at->diffForHumans() }}
                         <a class="read-more pull-right" href="{{ url('noticia', $noticia->slug) }}">Leer más </a>
                       </p>
                     </div>
                   </div>
                 @endforeach
               </div> --}}

               <div class="row">
               <h2 class="classic-title text-center"><span>Noticias Relacionadas</span></h2>
                 @foreach($noticias as $noticia)
                   <div class="col-md-4 post-row item">
                     <div class="left-meta-post">
                         <img src="{{ asset('img/noticias/'. $noticia->img) }}" alt="{{ $noticia->titulo }}" style="height: 150px;">
                     </div>
                     <h3 class="post-title"><a href="#">{{ $noticia->titulo }}</a></h3>
                     <div class="post-content">
                       <p class="text-justify">{{ str_limit($noticia->descripcion, 150,'...')}}
                         <br>
                       </p>
                       <p>
                         {{ $noticia->created_at->diffForHumans() }}
                         <a class="read-more pull-right" href="{{ url('noticia', $noticia->slug) }}">Leer más </a>
                       </p>
                     </div>
                   </div>
                 @endforeach
               </div>

               {{-- <div class="row">
               <h2 class="classic-title text-center"><span>Indicadores</span></h2>
                 @foreach ($accion->indicadores as $indicador)
                 <div class="col-xs-6 col-md-3 image-service-box">
                   <h3>{{ $indicador->indicador }}</h3>
                 </div>
                 @endforeach
               </div> --}}


               <div class="row">
               <h2 class="classic-title text-center"><span>Asesores</span></h2>
                 
                @foreach ($accion->servicio()->first()->asesores as $asesor)
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