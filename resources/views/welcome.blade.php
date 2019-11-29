<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mi Registro</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>
                @guest
                    Mi Registro
                @else 
                    <a class="nav-titulo" href="{{ route('home') }}">{{ Auth::user()->name }}</a>
                @endguest
            </h1> 

            @guest
                <a href="{{ route('login') }}" class="btn btn-primary">Ingresar</a>
                <a href="{{ route('register') }}" class="btn btn-primary">Registrarse</a>
            @else

                <div>
                    <a class="btn btn-primary" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Salir') }}
                    </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </div>
            @endguest 
        </div> {{-- container --}}
    </div> {{-- jumbotron --}}

<div class="container">
    <div class="row">
        <div class="col-6">
            <h5 class="text-title">Eventos Futuros</h5>
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Cant</th>
                                <th>Organizador</th>
                                <th>Deporte</th>
                                <th>Nombre</th>
                                <th>Fecha</th>
                                <th>Ver</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($eventsFut as $event)
                            <tr>
                                <td>{{ $event->athletes->count() }}</td>
                                <td><a href="#">{{ $event->organizer->nombre }}</a></td>
                                <td>{{ $event->sport->name }}</td>
                                <td>{{ $event->name }}</td>
                                <td>{{ $event->date }}</td>
                                <td><a href="{{ route('events.show',$event->id) }}" class="btn btn-primary">Ver</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $eventsFut->links() }} 
                </div>
            </div>            
        </div>
        <div class="col-6">
            <h5 class="text-title">Eventos Pasados</h5>
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Cant</th>
                                <th>Organizador</th>
                                <th>Deporte</th>
                                <th>Nombre</th>
                                <th>Fecha</th>
                                <th>Ver</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($eventPas as $event)
                            <tr>
                                <td>{{ $event->athletes->count() }}</td>
                                <td><a href="#">{{ $event->organizer->nombre }}</a></td>
                                <td>{{ $event->sport->nombre }}</td>
                                <td>{{ $event->name }}</td>
                                <td>{{ $event->date }}</td>
                                <td><a href="{{ route('events.show',$event->id) }}" class="btn btn-primary">Ver</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $eventPas->links() }} 
                </div>
            </div>            
        </div>      
    </div>
</div>                
</body>
</html>