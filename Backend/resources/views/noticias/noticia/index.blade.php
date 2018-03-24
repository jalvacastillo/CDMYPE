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
	<meta property="og:image"         content="{{ $noticia->recurso }}" />
@endsection

@section('content')

	<!-- Start Page Banner -->
	<div class="page-banner">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12 text-center">
	        <h2>{{ $noticia->titulo }}</h2>
	        <p>{{ $noticia->descripcion }}</p>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- End Page Banner -->
	
	<!-- Start Content -->
	<div id="content">
	  <div class="container">
	    <div class="row blog-post-page">
	      <div class="col-md-12 blog-box">

	        <!-- Start Single Post Area -->

	          @if($noticia->tipo == 'Imagen')

	          <div class="blog-post image-post">
	            <!-- Post Thumb -->
	            <div class="post-head">
	              <a class="lightbox" title="{{ $noticia->titulo }}" href="{{ url('noticia', $noticia->slug) }}">
	                <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
	                <img alt="" src="{{ $noticia->recurso }}">
	              </a>
	            </div>
	            <!-- Post Content -->
	            <div class="post-content">
	              <div class="post-type"><i class="fa fa-picture-o"></i></div>
	              <h2><a href="{{ url('noticia', $noticia->slug) }}">{{ $noticia->titulo }}</a></h2>
	              <ul class="post-meta">
	                <li>Autor: <a href="{{ url('noticia', $noticia->slug) }}">{{ $noticia->asesor }}</a></li>
	                <li>{{ $noticia->created_at }}</li>
	                <li><a href="{{ url('noticia', $noticia->slug) }}">{{ $noticia->tipo }}</a></li>
	              </ul>
	              
	              {!! $noticia->contenido !!}

	            </div>
	          </div>

	          @elseif($noticia->tipo == 'Video')

	          <div class="blog-post video-post">
	            <!-- Post Video -->
	            <div class="post-head">
	            <iframe width="560" height="315" src="{{ $noticia->recurso }}" frameborder="0" allowfullscreen></iframe>
	            </div>
	            <!-- Post Content -->
	            <div class="post-content">
	              <div class="post-type"><i class="fa fa-play"></i></div>
	              <h2><a href="{{ url('noticia', $noticia->slug) }}">{{ $noticia->titulo }}</a></h2>
	              <ul class="post-meta">
	                <li>Autor: <a href="{{ url('noticia', $noticia->slug) }}">{{ $noticia->asesor }}</a></li>
	                <li>{{ $noticia->created_at }}</li>
	                <li><a href="{{ url('noticia', $noticia->slug) }}">{{ $noticia->tipo }}</a></li>
	              </ul>
	              
	              {{ $noticia->contenido }}

	            </div>
	          </div>

	          @endif

	            <div class="post-bottom clearfix">
	              <div class="post-share">
	                <span>Comparte este post:</span> <br>
	                <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ url('/noticia/' . $noticia->slug) }}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="fa fa-facebook"></i></a>
	                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
	                <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
	              </div>
	            </div>
	          </div> 


	      </div>

            <div class="col-md-12">
                <div class="fb-comments" data-href="http://cri.catolica.edu.sv/cdmype" data-width="100%" data-numposts="5"></div>
            </div>

	    </div>

	  </div>
	</div>
	<!-- End content -->

@endsection