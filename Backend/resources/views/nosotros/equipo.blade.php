<h4 class="classic-title"><span>Nuestro equipo  </span></h4>

<div class="row">
  
  @foreach($asesores as $asesor)
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="team-member">
        <!-- Memebr Photo, Name & Position -->
        <div class="member-photo">
          <img alt="" src="{{ asset('/img/team/'. $asesor->avatar) }}" style="height:200px; width:280px;" />
          <div class="member-name">{{ $asesor->nombre }} <span>{{ $asesor->cargo }}</span></div>
        </div>
        <!-- Memebr Words -->
        <div class="member-info">
          <p>{{ str_limit($asesor->descripcion, 50, '...') }}</p>
        </div>
        <!-- Memebr Social Links -->
        <div class="member-socail">
          <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
          <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
          <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
          <a class="mail" href="mailto:{{ $asesor->email }}"><i class="fa fa-envelope"></i></a>
        </div>
      </div>
    </div>
  @endforeach

</div>