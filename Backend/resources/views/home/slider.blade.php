<section id="home">
  <div id="main-slide" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#main-slide" data-slide-to="0" class="active"></li>
      <li data-target="#main-slide" data-slide-to="1"></li>
      <li data-target="#main-slide" data-slide-to="2"></li>
    </ol>
  
    <div class="carousel-inner">

        <div class="item active" style="background-image: url('assets/images/slider/bg1.jpg');">
            <div class="slider-content">
                <div class="col-md-12 text-center">

                    <h2 class="animated7"> <span>Has crecer tu <strong>Empresa</strong></span> </h2>
                    <h3 class="animated8"> <span>Nosotros te ayudamos a hacerlo</span> </h3>
                    <p class="animated6"><a href="{{ url('nosotros') }}" class="slider btn btn-system btn-large">Conoce Como</a></p>

                </div>
            </div>
        </div>

        <div class="item" style="background-image: url('assets/images/slider/bg2.jpg');">
            <div class="slider-content">
                <div class="col-md-12 text-center">
                    <h2 class="animated4"> <span>Contamos con muchos <strong>servicos</strong></span> </h2>
                    <h3 class="animated5"> <span>Todos son de forma gratuita</span> </h3>
                    <p class="animated6"><a href="{{ url('servicio') }}" class="slider btn btn-system btn-large">Conoce nuestros servicio</a> </p>
                </div>
            </div>
        </div>

      <div class="item" style="background-image: url('assets/images/slider/bg3.jpg');">
        <div class="slider-content">
          <div class="col-md-12 text-center">
            <h2 class="animated7">
                            <span>7 años de <strong>experiencia</strong></span>
                        </h2>
            <h3 class="animated8">
                          <span>Acompañando empresas</span>
                        </h3>
            <p class="animated6"><a href="{{ url('servicio') }}" class="slider btn btn-system btn-large">Conocenos</a>
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