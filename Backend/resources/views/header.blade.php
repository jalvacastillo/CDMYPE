    <div class="hidden-header"></div>
    <header class="clearfix">

      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <ul class="contact-details">
                <li><a href="#"><i class="fa fa-map-marker"></i> Km. 51 1/2 Cantón Agua Zarca, Cabañas, El Salvador</a>
                </li>
                <li><a href="mailto:cdmype.unicaes@gmail.com"><i class="fa fa-envelope-o"></i> cdmype.unicaes@gmail.com</a>
                </li>
                <li><a href="tel:+5032378-1500"><i class="fa fa-phone"></i> 2378-1500 Ext: (136) </a>
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <ul class="social-list">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="https://www.facebook.com/CDMYPEILOBASCO/"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="https://twitter.com/CDMYPEUNICAES"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="youtube itl-tooltip" data-placement="bottom" title="youtube" href="https://www.youtube.com/channel/UCtsUESmY8YIGzecsaLZI28A"><i class="fa fa-youtube"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="navbar navbar-default navbar-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ route('inicio') }}" style="width: 120px;">
              <img alt="" src="{{ asset('img/cdmype-logo.jpg') }}">
            </a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              @foreach ($menu as $element)
              <li class="drop">
                <a class="{{ Request::is($element['route']) ? 'active' : '' }}" href="{{ route($element['route']) }}">
                  {{ $element['nombre'] }}
                </a>
                @if ($element['elementos'])
                  <ul class="dropdown">
                    @foreach ($element['elementos'] as $item)
                    <li><a href="{{ route($item['route']) }}">{{ $item['nombre'] }}</a></li>
                    @endforeach
                  </ul>
                @endif
              </li>
              @endforeach

              <li class="drop">
                @guest
                    <a href="{{ route('login') }}">Login</a>
                @else
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                @endguest
              </li>

            </ul>
          </div>
        </div>
        <ul class="wpb-mobile-menu">
            @foreach ($menu as $element)
            <li class="drop">
              <a class="{{ Request::is($element['route']) ? 'active' : '' }}" href="{{ route($element['route']) }}">
                {{ $element['nombre'] }}
              </a>
              @if ($element['elementos'])
                <ul class="dropdown">
                  @foreach ($element['elementos'] as $item)
                  <li><a href="{{ route($item['route']) }}">{{ $item['nombre'] }}</a></li>
                  @endforeach
                </ul>
              @endif
            </li>
            @endforeach
            <li class="drop">
                @guest
                    <a href="{{ route('login') }}">Login</a>
                @else
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                @endguest
              </li>
        </ul>
      </div>
    </header>
