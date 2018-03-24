<div class="col-md-4 sidebar right-sidebar">

  <div class="widget widget-search">
    <form action="#">
      <input type="search" placeholder="Buscar..." />
      <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>

  <div class="widget widget-categories">
    <h4>Categorias <span class="head-line"></span></h4>
    <ul>
      <li> <a href="{{ url('noticias/categoria', 'asesorias') }}">Asesorías</a> </li>
      <li> <a href="{{ url('noticias/categoria', 'tips') }}">Tips</a> </li>
      <li> <a href="{{ url('noticias/categoria', 'casos de exito') }}">Casos de Éxito</a> </li>
      <li> <a href="{{ url('noticias/categoria', 'eventos') }}">Eventos</a> </li>
      <li> <a href="{{ url('noticias/categoria', 'otro') }}">Otro</a> </li>
    </ul>
  </div>

  <div class="widget">
    <h4>Video <span class="head-line"></span></h4>
    <div>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/iOPQrzAZYvc" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>

</div>