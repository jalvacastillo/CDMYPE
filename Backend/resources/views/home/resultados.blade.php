<div id="parallax-one" class="parallax" style="background-image:url(img/parallax/results.jpg);">
    <div class="over"></div>
    <div class="parallax-text-container-1">
        <div class="parallax-text-item">
            <div class="container">
                
                <div class="row">

                    @foreach($resultados as $resultado)

                    <div class="col-xs-6 col-sm-4">
                        <div class="counter-item">
                            <i class="fa fa-users"></i>
                            <div class="timer" id="item1" data-to="{{ $resultado->total }}" data-speed="2000"></div>
                            <h5>{{ $resultado->nombre }}</h5>
                        </div>
                    </div>

                    @endforeach
                    
                
                    <div class="col-xs-12 text-center">
                    <br><br>
                    <br><br>
                        <p class="animated4"><a href="{{ url('noticias') }}" class="btn btn-system btn-large">Conoce lo que estamos haciendo</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
