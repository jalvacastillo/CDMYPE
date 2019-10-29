<style>
  #customers {
  font-family: "Times New Roman", sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #orange;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
<section>

    @if ($informe->vinculaciones->count() > 0)
    <h2> Vinculaciones<h2>    
    <p>Durante el mes de {{ $informe->mes }} se desarrollaron las siguientes vinculaciones:</p>


    <table id="customers">
    <tr>
    <th>Empresa</th>
    <th>Tipo de vinculación</th>
    <th>Institución</th>
    </tr>
    @foreach ($informe->vinculaciones as $vin)
        <tr>
        <td>{{$vin->tema}}</td>
        <td>{{$vin->descripcion}}</td>
        <td>{{$vin->institucion}}</td>
        </tr>
    @endforeach
    </table>

        
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