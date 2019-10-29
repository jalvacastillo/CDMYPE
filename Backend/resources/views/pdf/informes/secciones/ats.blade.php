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

    @if ($informe->ats->count() > 0)
    <h2> ASISTENCIAS TÉCNICAS<h2>    
    <p>Se desarrollaron {{$informe->ats->count()}} Asistencias Técnicas correspondientes a las siguientes áreas y empresas beneficiadas.</p>

    <table id="customers">
    <tr>
    <th>Asistencia Técnica</th>
    <th>Empresa Beneficiada</th>
    <th>Consultor</th>
    <th>Coordinación Academia</th>
    <th>Productos Terminados</th>
    </tr>
    @foreach ($informe->ats as $at)
        <tr>
        <td>{{$at->tema}}</td>
        <td>
            @foreach ($at->empresas as $empresa)
            {{$empresa->nombre}}</td>                
            @endforeach
        <td>
            @foreach ($at->ofertantes as $ofertante)
            {{$ofertante->nombre}}</td>                
            @endforeach
        <td>{{$at->contrato->lugar_firma}}</td>
        <td>{{$at->productos}}</td>
     
        </tr>
    @endforeach
    </table>
        
    


    @else
    <h2>ASISTENCIAS TÉCNICAS <h2> 
    <p>No se realizaron asistencias técnicas durante el mes de {{ $informe->mes }}</p> 
        
    @endif
    
   
</section>