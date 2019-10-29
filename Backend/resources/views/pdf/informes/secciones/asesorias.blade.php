
<h2>ASESORÍAS</h2> 
<p>A continuación, se detallan las asesorías realizadas en el mes de {{$informe->mes}}.</p>

<h3>Asesoría por tipo</h3>
<p> {{$informe->asesor_tic}}  Asesorías TIC</p>
<p> {{$informe->asesor_fi}}   Asesorías Financiera</p>
<p> {{$informe->asesor_efe}}   Asesorías Empresarialidad Femenina</p>
<p> {{$informe->asesor_emp}}   Asesorias Empresarial</p>

<br>
<h3>Tipo de ayuda</h3>
    @foreach ($informe->asesorias_categoria as $as)
        <p>{{$as->total}} {{$as->categoria}}</p>
    @endforeach

