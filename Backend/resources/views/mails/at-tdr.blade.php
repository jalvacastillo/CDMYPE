<p style='text-align: justify'>
    El Centro de Desarrollo de la Micro y Pequeña Empresa, Centro Regional de Ilobasco (CDMYPE-UNICAES) a través de los servicios de ASISTENCIA TÉCNICA adjunta por este medio los términos de referencia para aplicar a la asistencia técnica denominada, "{{ $tdr['tema'] }}".
    <br/><br/>
    En los siguientes enlaces se encuentran los formatos con los cuales podrán presentar la oferta técnica y económica. La fecha limite para la presentación de la oferta es {{ $tdr['fecha'] }}.
</p>
<br/>
<a href="{{route('atTdrPDF', encrypt($tdr['id'])) }}" target="_blank">TERMINOS DE REFENCIA (PDF)</a>
<br/>
<a href="{{route('formatos', 'F7.docx')}}" target="_blank">FORMATO OFERTA TÉCNICA Y ECONÓMICA (WORD)</a>
<br/>
<a href="{{route('subirOfertaAt', [encrypt($tdr['id']), encrypt($consultor['id']) ]) }}" target="_blank">Subir Oferta</a>
