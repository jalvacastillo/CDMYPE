<div class="container section">
  <div class="row">
      <!-- Start Recent Posts Carousel -->
    <div class="col-md-12">

      <div class="latest-posts">
        <h4 class="classic-title"><span>Ultimas Noticias</span></h4>
        <div class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="2">

            @foreach($noticias as $noticia)
              <div class="post-row item">
                <div class="left-meta-post">
                  <div class="post-date"><span class="day">{{ $noticia->created_at->format('d') }}</span><span class="month">{{ $noticia->created_at->format('M') }}</span></div>
                    <div class="post-type">
                        @if($noticia->tipo == 'Imagen')
                            <i class="fa fa-picture-o"></i>
                        @else
                            <i class="fa fa-video-camera"></i>
                        @endif
                    </div>
                </div>
                <h3 class="post-title"><a href="#">{{ $noticia->titulo }}</a></h3>
                <div class="post-content">
                  <p>{{ str_limit($noticia->descripcion, 150,'...')}}
                    <br>
                    <a class="read-more" href="{{ url('noticias', $noticia->slug) }}">Leer más</a>
                  </p>
                </div>
              </div>
            @endforeach

        </div>
      </div>

    <br><br>
    </div>
</div>
</div>