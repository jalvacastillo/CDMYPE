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
              <p>Publicado {{ $proyecto->created_at->diffForHumans() }}</p>

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
    <div class="row list-group"  style="margin: 40px 0px;">
    <div class="col-md-6 col-md-offset-3">
        @if ($aplicacion)
          <div class="alert alert-info">
            <h2>Gracias por haber aplicado!</h2> <br>
            <p>Te avisaremos si has sido el seleccionado.</p>
            <p>revisa el estado de tus aplicaciones en tu <b><a href="{{ route('usuario') }}">cuenta</a></b></p>
          </div>
        @else
          @guest
          <div ng-controller="AuthCtrl">
            <p class="text-center">Para aplicar primero tienes que <a ng-click="login()">iniciar sesión</a> o <a href="{{ route('register') }}">crear una cuenta</a>.</p>
          </div>
          @endguest
          @auth
          @if (Auth::user()->tipo != 'Administrador')
          <h3 class="text-center">Confirma tus datos para aplicar:</h3>
          <form class="form" method="POST" action="{{ route('aplicarProyecto', [str_slug($proyecto->nombre), encrypt($proyecto->id) ]) }}">
            {{ csrf_field() }}
            <div class="form-group">
                <p><b>Nombre:</b></p>
                <p>{{ $usuario->name }}</p>
            </div>
            <div class="form-group">
                <p><b>Correo:</b></p>
                <p>{{ $usuario->email }}</p>
            </div>
            <div class="form-group">
                <p><b>Telefono:</b></p>
                <p>{{ $usuario->detalle->telefono }}</p>
            </div>
            <input type="hidden" class="form-control" name="proyecto_id" value="{{ $proyecto->id }}">
            <div class="form-group">
                  <p><b>Nota:</b></p>
                  <textarea name="nota" class="form-control" cols="30" rows="3" placeholder="Opcional"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Aplicar</button>
          </form>
          @endif
          @endauth
        @endif
    </div>
    </div>
</div>

<script>
    $( "#contenido a" ).each(function( index ) {
        $(this).attr('target', 'blank');
    });
</script>

@endsection