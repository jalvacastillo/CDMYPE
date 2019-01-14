<section id="home">
  <div id="main-slide" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#main-slide" data-slide-to="0" class="active"></li>
      <li data-target="#main-slide" data-slide-to="1"></li>
      <li data-target="#main-slide" data-slide-to="2"></li>
    </ol>
  
    <div class="carousel-inner">

        <div class="item active" style="background-image: url('img/slider/bg1.jpg');">
            <div class="slider-content">
                <div class="col-md-12 text-center">

                    <h2 class="animated7">Ayudamos a <strong>Empresas</strong></h2>
                    <h3 class="animated8">a crecer</h3>
                    <p class="animated6"><a href="{{ route('guiaTipo') }}" class="slider btn btn-system btn-large">Conoce cómo</a></p>

                </div>
            </div>
        </div>

        <div class="item" style="background-image: url('img/slider/bg2.jpg');">
            <div class="slider-content">
                <div class="col-md-12 text-center">
                    <h2 class="animated4">Nuestros <strong>servicios</strong></h2>
                    <h3 class="animated5">Son gratuitos</h3>
                    <p class="animated6"><a href="{{ url('servicios') }}" class="slider btn btn-system btn-large">Servicios</a> </p>
                </div>
            </div>
        </div>

      <div class="item" style="background-image: url('img/slider/bg3.jpg');">
        <div class="slider-content">
          <div class="col-md-12 text-center">
            <h2 class="animated7">{{ date('Y') - 2010 }} años de <strong>experiencia</strong></h2>
            <h3 class="animated8">¿Te ayudamos?</h3>
            <p class="animated6"><a href="{{ url('registro') }}" class="slider btn btn-system btn-large">Inscríbete</a>
          </div>
        </div>
      </div>
    </div>

    <a class="left carousel-control" href="#main-slide" data-slide="prev">
      <span><i class="fa fa-angle-left"></i></span>
    </a>
    <a class="right carousel-control" href="#main-slide" data-slide="next">
      <span><i class="fa fa-angle-right"></i></span>
    </a>
  </div>

</section>