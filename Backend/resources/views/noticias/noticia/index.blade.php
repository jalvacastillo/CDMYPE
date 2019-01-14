@extends('layout')

@section('titulo')
  Noticia
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

	<meta property="og:url"           content="{{ url($noticia->slug) }}" />
	<meta property="og:type"          content="{{ $noticia->categoria }}" />
	<meta property="og:title"         content="{{ $noticia->titulo }}" />
	<meta property="og:description"   content="{{ $noticia->descripcion }}" />
	<meta property="og:image"         content="{{ asset('/img/noticias/'.$noticia->img) }}" />
@endsection

@section('content')

<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
            <img alt="" src=" {{ asset('/img/noticias/'.$noticia->img) }}" style="margin-bottom: 20px; height: 200px;">
            <h1>{{ $noticia->titulo }}</h1>
            <div class="post-meta">
                {{-- <p>Autor: <a href="{{ url('noticia', $noticia->slug) }}">{{ $noticia->asesor }}</a></p> --}}
                <p>Autor: <img class="img-circle" src="{{ asset('img/team/'. $noticia->asesor()->first()->avatar) }}" alt="{{ $noticia->asesor }}" style="height:30px;"></p>
                <p>{{ $noticia->created_at->diffForHumans() }}</p>
                <p><a  class="label label-primary" href="{{ url('noticia', $noticia->slug) }}">{{ $noticia->categoria }}</a></p>
                <div class="post-bottom clearfix">
                  <div class="post-share" style="float: none;">
                    <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ url('/noticia/' . $noticia->slug) }}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="fa fa-facebook"></i></a>
                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
                  </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            {!! $noticia->contenido !!}
        </div>
        <hr>
        <div class="col-md-12 text-center">
          <div class="post-meta">
              <div class="post-bottom clearfix">
                <div class="post-share" style="float: none;">
                  <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ url('/noticia/' . $noticia->slug) }}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="fa fa-facebook"></i></a>
                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                  <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
                </div>
              </div>
          </div>
          </div>
        </div> 

        <div class="col-md-12" style="margin: 50px 0px">
            <div class="fb-comments" data-href="http://cri.catolica.edu.sv/cdmype" data-width="100%" data-numposts="5"></div>
        </div>

    </div>
</div>

@endsection