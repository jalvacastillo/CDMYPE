<p style='text-align: justify'>
    El Centro de Desarrollo de la Micro y Pequeña Empresa, Centro Regional de Ilobasco (CDMYPE-UNICAES) a través de los servicios de CAPACITACIÓN adjunta por este medio los términos de referencia para aplicar a la capacitación denominada, "{{ $tdr['tema'] }}".
    <br/><br/>
    En los siguientes enlaces se encuentran los formatos con los cuales podrán presentar la oferta técnica y económica. La fecha limite para la presentación de la oferta es {{ $tdr['fecha_limite'] }}.
</p>
<br/>
<a href="{{route('capTdrPDF', encrypt($tdr['id'])) }}" target="_blank">TERMINOS DE REFENCIA (PDF)</a>
<br/>
<a href="{{route('formatos', 'F7.docx')}}" target="_blank">FORMATO OFERTA TÉCNICA Y ECONÓMICA (WORD)</a>
<br/>
<a href="{{route('subirOfertaCap', [encrypt($tdr['id']), encrypt($consultor['id']) ]) }}" target="_blank">Subir Oferta</a>
