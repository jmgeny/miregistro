        <nav class="navbar navbar-expand-md navbar-laravel navbar-dark jmg-primary">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <h3>Mi Registro</h3>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="{{ route('events.index') }}" class="nav-link">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('organizers.index') }}" class="nav-link">Organizador</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('athletes.index') }}" class="nav-link">Atleta</a>
                        </li>                                                                       
                    </ul>
                    <ul class="navbar-nav float-right">
                    @guest
                        <a href="{{ route('login') }}" class="btn btn-primary">Ingresar</a>
                        <a href="{{ route('register') }}" class="btn btn-primary">Registrarse</a>
                    @else
                                
                                    <h3>{{ Auth::user()->name }}</h3>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                    @endguest                        
                    </ul>
                    
                </div>
            </div>
        </nav>