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
{{--     <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: black;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style> --}}
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>
                @guest
                Mi Registro
                @else
                <a class="nav-titulo" href="{{ route('home') }}">{{ Auth::user()->name }}</a>
            @endguest</h1> 

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
<div class="card">
    <div class="card-header">
        <h2>Eventos disponibles</h2>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Organizador</th>
                    <th>Deporte</th>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Ver</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                <tr>
                    <td>{{ $event->organizer->nombre }}</td>
                    <td>{{ $event->sport->nombre }}</td>
                    <td>{{ $event->nombre }}</td>
                    <td>{{ $event->fecha }}</td>
                    <td><a href="{{ route('events.show',$event->id) }}" class="btn btn-primary">Ver</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $events->links() }} 
    </div>
</div>    
</div>                
</body>
</html>