<section>


    @if ($informe->actividades->count() > 0)
    <h2> PROMOCIÓN PROPIA Y ACTIVIDADES<h2>    
    <p>Durante el mes de {{ $informe->mes }} se desarrollaron las siguientes actividades de promoción:</p>
        
        @foreach ($informe->actividades_categoria as $actividad)
            <p>{{ $actividad->total }} {{ $actividad->tipo }}</p>
        @endforeach
        <br><br>
        @foreach ($informe->actividades as $act)
            <h3>{{ $act->nombre }} categoría: {{$act->categoria}}</h3> 
            <p>{{$act->descripcion}}</p><br>
            @if (isset($act->img))
            <br>
                 <img src="{{ 'img/' . $act->img }}" width="300px">
            @else
            @endif

        @endforeach
    @else
    <h2>PROMOCIÓN PROPIA Y ACTIVIDADES <h2> 
    <p>No se realizaron actividades durante el mes de {{ $informe->mes }}</p> 
        
    @endif
    
    {{-- {{ $informe->coordinaciones->where('categoria', 'Mercadito')->count() }}  --}}
    
</section>