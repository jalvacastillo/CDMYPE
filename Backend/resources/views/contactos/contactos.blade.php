<div class="col-md-8">

  <h4 class="classic-title"><span>Contactanos</span></h4>
  @if(session()->has('message'))
      <div class="alert alert-success">
          {{ session()->get('message') }}
      </div>
  @endif
  <form role="form" class="contact-form" id="contact-form" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <div class="controls">
        <input type="text" placeholder="Nombre" name="nombre" required>
      </div>
    </div>
    <div class="form-group">
      <div class="controls">
        <input type="email" class="email" placeholder="correo@ejemplo.com" name="correo" required>
      </div>
    </div>
    <div class="form-group">

      <div class="controls">
        <textarea rows="7" placeholder="Mensaje" name="mensaje" required></textarea>
      </div>
    </div>
    <button type="submit" id="submit" class="btn-system btn-large">Enviar</button>
    <div id="success" style="color:#34495e;"></div>
  </form>

</div>