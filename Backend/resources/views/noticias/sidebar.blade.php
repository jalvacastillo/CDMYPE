<div class="col-md-3 sidebar right-sidebar">

  <div class="widget widget-search">
    <form action="#">
      <input type="search" placeholder="Buscar..." />
      <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>

  <div class="widget widget-categories">
    <h4>Categorias <span class="head-line"></span></h4>
    <ul>
      @foreach ($categorias as $categoria)
      <li> <a href="{{ url('noticias/categoria/'. str_slug($categoria->first()->categoria) ) }}">{{ $categoria->categoria }} <span class="badge pull-right">{{ $categoria->total }}</span></a> </li>
      @endforeach
    </ul>
  </div>

  <div class="widget">
    <h4>Video <span class="head-line"></span></h4>
    <div>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/iOPQrzAZYvc" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>

</div>