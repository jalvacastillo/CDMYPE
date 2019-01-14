<div class="row text-center">
  
  <h2 class="classic-title" id="asesorias"><span>Asesorías</span></h2>

  <div class="row">
    
    @foreach ($asesorias as $asesoria)
    <a href="{{ route('servicio', $asesoria->slug) }}">
    <div class="col-xs-6 col-md-3 image-service-box">
      <div class="service-icon">
          <img src="{{ asset('img/servicios/'. $asesoria->img) }}" alt="{{ $asesoria->nombre }}" height="50px">
      </div>
      <h3>{{ $asesoria->nombre }}</h3>
      <p>{{ $asesoria->descripcion }}</p>
      <a class="btn-link" href="{{ route('servicio', $asesoria->slug) }}">Más información <i class="fa fa-angle-right"></i></a>
    </div>
    </a>
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
      <p>{{ $otro->descripcion }}</p>
      <a href="{{ route('servicio', $otro->slug) }}">Más información <i class="fa fa-angle-right"></i></a>
    </div>
    @endforeach

  </div>
</div>