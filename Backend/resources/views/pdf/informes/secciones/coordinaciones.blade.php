<section>


    @if ($informe->coordinaciones->count() > 0)
    <h2> COORDINACIÓN CON CENTROS REGIONALES DE CONAMYPE<h2>    
    <p>Durante el mes de {{ $informe->mes }} se realizaron las siguientes actividades de coordinación:</p>
        
        @foreach ($informe->coordinaciones as $coordinacion)
            <p>{{ $coordinacion->descripcion }}</p>
        @endforeach
    @else
    <h2> COORDINACIÓN CON CENTROS REGIONALES DE CONAMYPE<h2> 
    <p>No se realizaron coordinaciones durante el mes de {{ $informe->mes }}</p> 
        
    @endif
    
    {{-- {{ $informe->coordinaciones->where('categoria', 'Mercadito')->count() }}  --}}
    
</section>