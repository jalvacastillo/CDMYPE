<div class="row">
<form ng-submit="submit()">
    <div class="form-group col-md-4">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" ng-model="usuario.detalle.nombre">
    </div>
    <div class="form-group col-md-4" ng-if="usuario.tipo == 'Consultor'">
        <label for="nit">NIT:</label>
        <input type="text" class="form-control" name="nit" ng-model="usuario.detalle.nit">
    </div>
    <div class="form-group col-md-4" ng-if="usuario.tipo == 'Consultor'">
        <label for="dui">DUI:</label>
        <input type="text" class="form-control" name="dui" ng-model="usuario.detalle.dui">
    </div>
    <div class="form-group col-md-4" ng-if="usuario.tipo == 'Consultor'">
        <label for="empresa">Empresa:</label>
        <input type="text" class="form-control" name="empresa" ng-model="usuario.detalle.empresa">
    </div>
    <div class="form-group col-md-4">
        <label for="correo">Correo:</label>
        <input type="email" class="form-control" name="correo" ng-model="usuario.detalle.correo">
    </div>
    <div class="form-group col-md-4">
        <label for="telefono">Teléfono:</label>
        <input type="tel" class="form-control" name="telefono" ng-model="usuario.detalle.telefono">
    </div>
    <div class="form-group col-md-4" ng-if="usuario.tipo == 'Alumno'">
        <label for="carrera">Carrera:</label>
        <input type="tel" class="form-control" name="carrera" ng-model="usuario.detalle.carrera">
    </div>
    <div class="form-group col-md-4">
        <label for="direccion">Dirección:</label>
        <input type="text" class="form-control" name="direccion" ng-model="usuario.detalle.direccion">
    </div>
    <div class="form-group col-md-4">
        <label for="municipio">Municipio:</label>
        <input type="text" class="form-control" name="municipio" ng-model="usuario.detalle.municipio">
    </div>
    <div class="form-group col-md-4">
        <label for="sexo">Sexo:</label> <br>
        <select name="sexo" ng-model="usuario.detalle.sexo" class="form-control">
            <option value="" disabled>Seleccionar Sexo</option>
            <option value="Mujer">Mujer</option>
            <option value="Hombre">Hombre</option>
        </select>
    </div>

    <div class="form-group col-md-12 mt-5">
        <button type="submit" class="btn btn-primary float-right">
            <span ng-if="!loading">Guardar</span>
            <span ng-if="loading">Guardando...</span>
        </button>
    </div>
</form>
</div>