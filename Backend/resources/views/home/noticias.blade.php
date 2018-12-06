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
      </div>

    <br><br>
    </div>
</div>
</div>