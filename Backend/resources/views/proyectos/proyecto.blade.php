@extends('layout')

@section('titulo')
  Proyecto
@endsection

@section('header')
  <!-- Face comments -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.11';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <meta property="og:url"           content="{{ route('proyecto', [$proyecto->id, str_slug($proyecto->slug)]) }}" />
  <meta property="og:type"          content="{{ $proyecto->categoria }}" />
  <meta property="og:title"         content="{{ $proyecto->nombre }}" />
  <meta property="og:description"   content="{{ $proyecto->descripcion }}" />
  <meta property="og:image"         content="{{ asset('/img/proyectos/'.$proyecto->img) }}" />

  <style>
      #contenido{text-align: justify; margin: 50px auto;}
      #contenido ul {padding: 40px !important; margin: inherit !important; }
      #contenido li{font-size: 16px; }
      #contenido blockquote {padding: 10px 20px; margin: 20px; }
      #contenido ul, #contenido ol {list-style: inherit !important; margin-top: inherit !important; margin-bottom: inherit !important; }
  </style>

@endsection

@section('content')

<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
              <img class="img-circle" src="{{ asset('img/empresas/'. $proyecto->empresas()->first()->logo) }}" alt="{{ $proyecto->empresas()->first()->nombre }}" style="height:150px;" data-toggle="tooltip" title="{{ $proyecto->empresas()->first()->nombre }}">
              <h1>{{ $proyecto->nombre }}</h1>
              <p>Encargados: 
                @foreach ($proyecto->asesores as $asesor)
                  <img class="img-circle" src="{{ asset('img/team/'. $asesor->avatar) }}" alt="{{ $asesor->nombre }}" style="height:30px;" data-toggle="tooltip" title="{{ $asesor->nombre }}">
                @endforeach
              </p>
              <p>Publicado hace {{ $proyecto->created_at->diffForHumans() }}</p>

              <p class="label label-primary">{{ $proyecto->categoria }}</p>
              <p class="label label-info">{{ $proyecto->tipo }}</p>
              <p class="label label-success">{{ $proyecto->especialidad }}</p>

              <h4><b>Fecha límite:</b> {{ $proyecto->finalizacion->format('d-m-Y') }} | <b>Duración:</b> {{ $proyecto->duracion }}</h4>

              <div class="post-bottom clearfix">
                <div class="post-share" style="float: none;">
                  <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ url('/proyecto/' . $proyecto->slug) }}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="fa fa-facebook"></i></a>
                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                  <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

<div class="container" id="contenido">
    <div class="row">
        <div class="col-xs-12" >
          {!! $proyecto->contenido !!}
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <a href="{{ route('aplicar', encrypt($proyecto->id)) }}" class="btn-primary btn-block">Aplicar</a>
    </div>
</div>

<script>
    $( "#contenido a" ).each(function( index ) {
        $(this).attr('target', 'blank');
    });
</script>

@endsection