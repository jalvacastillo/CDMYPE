<section>


    @if ($informe->noticias->count() > 0)
   
        @foreach ($informe->noticias as $noti)
            <h3>{{ $noti->titulo }} categoría: {{$noti->categoria}}</h3> 
            <p>{{$noti->descripcion}}</p><br>
            @if (isset($noti->img))
            <br>
                 <img src="{{ 'img/' . $noti->img }}" width="300px">
            @else
            @endif

        @endforeach
    @else
        
    @endif
    
    {{-- {{ $informe->coordinaciones->where('categoria', 'Mercadito')->count() }}  --}}
    
</section>