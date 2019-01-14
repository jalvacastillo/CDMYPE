<h2>Hola</h2>
<h4>Te ha escrito:</h4>
<hr>
<p><b>Nombre: </b>{{ $request['nombre'] }}</p>
<p><b>Correo: </b><a href="mailto:{{ $request['correo'] }}">{{ $request['correo'] }}</a></p>
<p><b>Mensaje: </b>{{ $request['mensaje'] }}</p>