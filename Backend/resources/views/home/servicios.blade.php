<div class="section service">
    <div class="container">
        <div class="row text-center">

            <div class="big-title" data-animation="fadeInDown" data-animation-delay="01">
                <h1>Nuestros <strong>Servicios</strong></h1>
                <p class="title-desc">Brindamos servicios integrales para ayudarte en todas las áreas de tu empresa.</p>
            </div>
            
            <h2 class="classic-title" id="asesorias"><span>Asesorías</span></h2>

            <div class="row">
              
              @foreach ($asesorias as $asesoria)
              <div class="col-xs-6 col-md-3 image-service-box">
                <div class="service-icon">
                    <img src="{{ asset('img/servicios/'. $asesoria->img) }}" alt="{{ $asesoria->nombre }}" height="50px">
                </div>
                <h3>{{ $asesoria->nombre }}</h3>
                <p class="hidden-xs">{{ $asesoria->descripcion }}</p>
                <br>
                <a href="{{ route('servicio', $asesoria->slug) }}">Más información <i class="fa fa-angle-right"></i></a>
              </div>
              @endforeach


            </div>

            <br>
            <h2 class="classic-title" id="otros"><span>Otros Servicios</span></h2>

            <div class="row">

              @foreach ($otros as $otro)
              <div class="col-xs-6 col-md-4 image-service-box">
                <div class="service-icon">
                    <img src="{{ asset('img/servicios/'. $otro->img) }}" alt="{{ $otro->nombre }}" height="50px">
                </div>
                <h3>{{ $otro->nombre }}</h3>
                <p class="hidden-xs">{{ $otro->descripcion }}</p>
                <br>
                <a href="{{ route('servicio', $otro->slug) }}">Más información <i class="fa fa-angle-right"></i></a>
              </div>
              @endforeach

            </div>

        </div>
    
        <div class="row">
            <div class="col-xs-12 text-center">
                <br><br>
                <p class="animated4"><a href="{{ url('servicios') }}" class="btn btn-system btn-large">Conoce más</a>
            </div>
        </div>

    </div>
</div>