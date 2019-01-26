<h4 class="classic-title"><span>Nuestro equipo  </span></h4>

<div class="row">
  
  @foreach($asesores as $asesor)
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="team-member">
        <div class="member-photo">
          <img alt="" src="{{ asset('/img/team/'. $asesor->avatar) }}" style="height:250px;" />
          <div class="member-name">{{ $asesor->nombre }} <span>{{ $asesor->cargo }}</span></div>
        </div>
        <!-- Memebr Words -->
        {{-- <div class="member-info" style="min-height: 100px;">
          <p>{{ str_limit($asesor->descripcion, 70, '...') }}</p>
        </div> --}}
        <!-- Memebr Social Links -->
        <div class="member-socail">
          @if ($asesor->url_linkedin)
            <a class="linkedin" href="{{ $asesor->url_linkedin }}" target="_black"><i class="fa fa-linkedin"></i></a>
          @endif
          @if ($asesor->url_facebook)
            <a class="facebook" href="{{ $asesor->url_facebook }}" target="_black"><i class="fa fa-facebook"></i></a>
          @endif
          @if ($asesor->url_twitter)
            <a class="twitter" href="{{ $asesor->url_twitter }}" target="_black"><i class="fa fa-twitter"></i></a>
          @endif
          @if ($asesor->email)
            <a class="mail" href="mailto:{{ $asesor->email }}" target="_black"><i class="fa fa-envelope"></i></a>
          @endif

        </div>

      </div>
    </div>
  @endforeach

</div>