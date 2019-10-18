<section>


    @if ($informe->vinculaciones->count() > 0)
    <h2> Vinculaciones<h2>    
    <p>Durante el mes de {{ $informe->mes }} se desarrollaron las siguientes vinculaciones:</p>
        
        @foreach ($informe->vinculaciones as $vinculacion)
            <h3>{{ $vinculacion->tema }}</h3>
            <p>{{ $vinculacion->descripcion }}</p>
            @if (isset($vinculacion->img))
            <br>
            <img src="{{ 'img/' . $vinculacion->img }}" width="300px">
            @else
            
            @endif
                
            
        @endforeach
    @else
    <h2>PROMOCIÓN PROPIA Y ACTIVIDADES <h2> 
    <p>No se realizaron actividades durante el mes de {{ $informe->mes }}</p> 
        
    @endif
    
    {{-- {{ $informe->coordinaciones->where('categoria', 'Mercadito')->count() }}  --}}
    
</section>