@extends('layout')

@section('titulo')
  Noticias
@endsection

@section('content')
    
    @include('noticias.title')

    <div id="content">
        <div class="container">
            <div class="row blog-page">

                <div class="col-md-8 blog-box">

                    @foreach($noticias as $noticia)
                        
                        <div class="blog-post image-post col-xs-12">
                          <!-- Post Thumb -->
                          <div class="post-head col-xs-4">
                            <a class="lightbox" title="{{ $noticia->titulo }}" href="{{ url('noticia', $noticia->slug) }}">
                              <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                              <img alt="" src=" {{ asset('/img/noticias/'.$noticia->img) }}">
                            </a>
                          </div>
                          <!-- Post Content -->
                          <div class="post-content col-xs-8">
                            <h2><a href="{{ url('noticia', $noticia->slug) }}">{{ $noticia->titulo }}</a></h2>
                            <div class="post-meta">
                              <span>Autor: <a href="{{ url('noticia', $noticia->slug) }}">{{ $noticia->asesor }}</a></span>
                              <span>{{ $noticia->created_at->diffForHumans() }}</span>
                              <span><a href="{{ url('noticia', $noticia->slug) }}">{{ $noticia->tipo }}</a></span>
                            </div>
                            <p>{{ $noticia->descripcion }}</p>
                            <a class="main-button" href="{{ url('noticia', $noticia->slug) }}">Leer más <i class="fa fa-angle-right"></i></a>
                          </div>
                        </div>

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