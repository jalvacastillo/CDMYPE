<div class="row">
<form ng-submit="submit()">
    <div class="form-group col-md-4">
        <label for="email">Correo:</label>
        <input type="email" class="form-control" name="email" ng-model="usuario.email">
    </div>
    <div class="form-group col-md-4">
        <label for="password">Contraseña:</label>
        <input type="password" class="form-control" name="password" ng-model="usuario.password">
    </div>
    <div class="form-group col-md-4">
        <label for="password_confirm">Confirmar contraseña:</label>
        <input type="password" class="form-control" name="password_confirm" ng-model="usuario.password_confirm">
    </div>

    <div class="form-group col-md-12 mt-5">
        <button type="submit" class="btn btn-primary float-right">
            <span ng-if="!loading">Guardar</span>
            <span ng-if="loading">Guardando...</span>
        </button>
    </div>
</form>
</div>