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

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="encabezado encabezado-fluid">
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
    </div> {{-- encabezado --}}

@include('listEvents')

</body>
</html>