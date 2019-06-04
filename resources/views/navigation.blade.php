        <nav class="navbar navbar-expand-md navbar-laravel navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Mi Registro
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="{{ route('events.index') }}" class="nav-link">Evento</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('organizers.index') }}" class="nav-link">Organizador</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('athletes.index') }}" class="nav-link">Atleta</a>
                        </li>                                                                        
                    </ul>
                    
                </div>
            </div>
        </nav>