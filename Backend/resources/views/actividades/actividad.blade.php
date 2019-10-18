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

  <meta property="og:url"           content="{{ route('actividad', [$actividad->id, str_slug($actividad->slug)]) }}" />
  <meta property="og:type"          content="{{ $actividad->categoria }}" />
  <meta property="og:title"         content="{{ $actividad->nombre }}" />
  <meta property="og:description"   content="{{ $actividad->descripcion }}" />
  <meta property="og:image"         content="{{ asset('/img/'.$actividad->img) }}" />

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
        <div class="row text-center">
            <img src="{{ asset('/img/'. $actividad->img) }}" alt="{{ $actividad->nombre }}" style="height: 30%; width: 30%;">
            <h1>{{ $actividad->nombre }}</h1>
        </div>
    </div>
</div>

<div class="container" id="contenido">
    <div class="col-md-12 text-center">
      <p>Encargados: 
        @foreach ($actividad->asesores as $asesor)
          <img class="img-circle" src="{{ asset('img/team/'. $asesor->avatar) }}" alt="{{ $asesor->nombre }}" style="height:30px;" data-toggle="tooltip" title="{{ $asesor->nombre }}">
        @endforeach
      </p>
      <p>Publicado {{ $actividad->created_at->diffForHumans() }}</p>

      <p class="label label-primary">{{ $actividad->categoria }}</p>
      <p class="label label-info">{{ $actividad->tipo }}</p>
      <p class="label label-success">{{ $actividad->especialidad }}</p>
      
      <div class="post-bottom clearfix">
        <div class="post-share" style="float: none;">
          <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ url('/actividad/' . $actividad->slug) }}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="fab fa-facebook"></i></a>
          <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
          <a class="mail" href="#"><i class="fab fa-envelope"></i></a>
        </div>
      </div>
    </div>
    <h3 class="row">
      <div class="col-xs-6 text-right" style="border-right: 1px solid gray;">
      <b>Inicia</b> <br>
      {{ strftime('%A, %e de %B del %Y', strtotime($actividad->inicio)) }}
      <br>
      {{ strftime('%I:%M:%S %p', strtotime($actividad->inicio)) . ((strtotime($actividad->inicio) % 86400) < 43200 ? 'AM' : 'PM') }} 
      </div>
      <div class="col-xs-6 text-left">
        <b>Finaliza</b> <br>
      {{ strftime('%A, %e de %B del %Y', strtotime($actividad->fin)) }}
      <br>
      {{ strftime('%I:%M:%S %p', strtotime($actividad->fin)) . ((strtotime($actividad->fin) % 86400) < 43200 ? 'AM' : 'PM') }} 
      </div>
    </h3>
    <h4 class="col-xs-12 text-center">
      {{ $actividad->cupo}} Cupos |
      {{ $actividad->total_aplicaciones}} Incritos |
      {{ $actividad->cupo - $actividad->total_aplicaciones}} Disponibles
    </h4>
    <div class="row">

        <div class="col-md-10 col-md-offset-1">
          <p>{!! $actividad->contenido !!}</p>
        </div>
        
    </div>
</div>

<div class="container">
    <div class="row list-group"  style="margin: 40px 0px;">
    <div class="col-md-6 col-md-offset-3 text-center">
        @if ($aplicacion)
          <div class="alert alert-info">
            <h2>Gracias por haber aplicado!</h2> <br>
            <p>El estado de tu aplicación es: <span class="badge badge-info">{{ $aplicacion->estado }}</span>.</p>
            <p>Puedes ver el estado de tus aplicaciones en tu <b><a href="{{ route('usuario') }}">cuenta</a></b></p>
          </div>
        @else

          <div ng-controller="ActividadesCtrl">
          <h3 class="text-center">Confirma tus datos para participar:</h3>

          <form class="form">
            {{ csrf_field() }}
            <div class="form-group">
              <div class="col-md-12">
                <p><b>Nombre:</b></p>
                <input type="text" class="form-control" ng-model="aplicacion.nombre">
                <br></div>
            <div class="col-md-6">
                <p><b>Sexo:</b></p>
                <select name="sexo" class="form-control" ng-Model="aplicacion.sexo">
                      <option value="Masculino">Masculino</option>
                      <option value="Femenino">Femenino</option>
                </select>
            </div>
            <div class="col-md-6">
                <p><b>Empresa:</b></p>
                <input type="text" class="form-control" ng-model="aplicacion.empresa">
                <br></div>
            <div class="col-md-6">
                <p><b>Correo:</b></p>
                <input type="text" class="form-control" ng-model="aplicacion.correo">
                </div>
            <div class="col-md-6">
                <p><b>Teléfono:</b></p>
                <input type="text" class="form-control" ng-model="aplicacion.telefono">
                <br></div>
            <div class="col-md-6">
                <p><b>Municipio:</b></p>
                <input type="text" class="form-control" ng-model="aplicacion.municipio">
                </div>
            <div class="col-md-6">
                <p><b>Departamento:</b></p>
                <input type="text" class="form-control" ng-model="aplicacion.departamento">
                <br></div>
            <input type="hidden" class="form-control" id="actividad_id"  value="{{ $actividad->id }}">
            <div class="col-md-12">
                  <p><b>Nota:</b></p>
                  <textarea name="nota" ng-model="aplicacion.nota" class="form-control" cols="30" rows="3" placeholder="Opcional"></textarea><br>
            </div>
          </form>
            <input type="hidden" id="actividad_id" value="{{ $actividad->id }}">
            <div class="col-md-12">
            <button ng-click="aplicar()" class="btn btn-primary">Aplicar</button><br>

          </div>
          </div>  
          </div>
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