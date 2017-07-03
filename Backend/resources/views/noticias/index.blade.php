@extends('layout')

@section('titulo')
  Noticias
@endsection

@section('content')
    
    @include('noticias.title')

    <div id="content">
        <div class="container">
            <div class="row blog-page">

                <div class="col-md-9 blog-box">

                    @foreach($noticias as $noticia)
                        
                        @if($noticia->categoria == 'Imagen')

                        <div class="blog-post image-post">
                          <!-- Post Thumb -->
                          <div class="post-head">
                            <a class="lightbox" title="{{ $noticia->titulo }}" href="assets/images/{{ $noticia->recurso }}">
                              <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                              <img alt="" src="assets/images/{{ $noticia->recurso }}">
                            </a>
                          </div>
                          <!-- Post Content -->
                          <div class="post-content">
                            <div class="post-type"><i class="fa fa-picture-o"></i></div>
                            <h2><a href="#">{{ $noticia->titulo }}</a></h2>
                            <ul class="post-meta">
                              <li>Autor: <a href="#">{{ $noticia->asesor }}</a></li>
                              <li>{{ $noticia->created_at }}</li>
                              <li><a href="#">{{ $noticia->tipo }}</a></li>
                            </ul>
                            <p>{{ $noticia->descripcion }}</p>
                            <a class="main-button" href="#">Leer más <i class="fa fa-angle-right"></i></a>
                          </div>
                        </div>

                        @elseif($noticia->categoria == 'Video')

                        <div class="blog-post video-post">
                          <!-- Post Video -->
                          <div class="post-head">
                          <iframe width="560" height="315" src="" frameborder="0" allowfullscreen></iframe>
                          </div>
                          <!-- Post Content -->
                          <div class="post-content">
                            <div class="post-type"><i class="fa fa-play"></i></div>
                            <h2><a href="#">{{ $noticia->titulo }}</a></h2>
                            <ul class="post-meta">
                              <li>Autor: <a href="#">{{ $noticia->asesor }}</a></li>
                              <li>{{ $noticia->created_at }}</li>
                              <li><a href="#">{{ $noticia->tipo }}</a></li>
                            </ul>
                            <p>{{ $noticia->descripcion }}</p>
                            <a class="main-button" href="#">Leer más <i class="fa fa-angle-right"></i></a>
                          </div>
                        </div>

                        @endif

                    @endforeach
                  <div class="text-center">
                    {{ $noticias->links() }}
                  </div>

                </div>


              @include('noticias.sidebar')


            </div>
        </div>
    </div>

@endsection