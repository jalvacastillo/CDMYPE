<div class="container section" style="padding-top: 0;">
  <div class="row">

    <div class="col-md-12">

      <h4 class="classic-title"><span>Testimonio de nuestros clientes</span></h4>
      
      <div class="custom-carousel show-one-slide touch-carousel" data-appeared-items="2">
      @foreach ($testimonios as $testimonio)
        <div class="classic-testimonials item">
          <div class="col-xs-3">
            <img src="{{ asset('img/clientes/'. $testimonio->logo) }}" alt="Logo" width="200px">
          </div>
          <div class="col-xs-7">
            <div class="testimonial-content">
              <p>{{ $testimonio->descripcion }}</p>
            </div>
          </div>
          <div class="testimonial-author"><span>{{ $testimonio->propietario }}</span> - Propietaria</div>
        </div>

      @endforeach
      </div>

    </div>
  </div>
</div>