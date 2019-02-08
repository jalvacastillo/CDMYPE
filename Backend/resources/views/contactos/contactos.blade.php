<div class="col-md-8">

  <h4 class="classic-title"><span>Contactanos</span></h4>
  @if(session()->has('message'))
      <div class="alert alert-success">
          {{ session()->get('message') }}
      </div>
  @endif
  <form ng-submit="onSubmit()" class="contact-form" id="contact-form">
    <div class="form-group">
        <input type="text" placeholder="Nombre" ng-model="correo.nombre" required>
    </div>
    <div class="form-group">
        <input type="email" class="email" placeholder="correo@ejemplo.com" ng-model="correo.correo" required>
    </div>
    <div class="form-group">
        <textarea rows="7" placeholder="Mensaje" ng-model="correo.mensaje" required></textarea>
    </div>
    <button type="submit" id="submit" class="btn-system btn-large">
      <span ng-if="!loading">Enviar</span>
      <span ng-if="loading">Enviando...</span>
    </button>
    <div style="width: 100%; margin-top: 15px;" ng-if="msj">
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Recibido!</strong> @{{ msj }}
      </div>
    </div>
  </form>

</div>