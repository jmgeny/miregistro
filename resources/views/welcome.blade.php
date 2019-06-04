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
        <style>
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
        </style>
    </head>
    <body>
{{--         <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    @guest
                        Mi Registro
                    @else
                        <a class="nav-titulo" href="{{ route('home') }}">{{ Auth::user()->name }}</a>
                    @endguest
                </div>

                <div class="links">
                    @guest
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                    @else
                        
                                <div class="links">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            
                    @endguest
                </div>
        <h3>Listado de Eventos</h3>
                <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Organizador</th>
                            <th>Deporte</th>
                            <th>Nombre</th>
                            <th>Fecha</th>
                            <th>Cantidad</th>
                            <th>Inscribirse</th>
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
                            <td>cantidad</td>
                            <td>inscribirse</td>
                            <td><a href="{{ route('events.show',$event->id) }}" class="btn btn-primary">Ver</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> 
                  
                </div>
                {{ $events->links() }}
            </div>
        </div> --}}
  <header class="bg-primary text-white fixed-top">
    <div class="container text-center">
        <h1>
                    @guest
                        Mi Registro
                    @else
                        <a class="nav-titulo" href="{{ route('home') }}">{{ Auth::user()->name }}</a>
                    @endguest
        </h1>
      <p class="lead">

      </p>
    </div>
  </header>
                <div class="links" style="margin-top: 100px">
                    @guest
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                    @else
                        
                                <div class="links">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            
                    @endguest
                </div>
<h2>Eventos disponibles</h2>
 
    <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Organizador</th>
                            <th>Deporte</th>
                            <th>Nombre</th>
                            <th>Fecha</th>
                            <th>Cantidad</th>
                            <th>Inscribirse</th>
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
                            <td>cantidad</td>
                            <td>inscribirse</td>
                            <td><a href="{{ route('events.show',$event->id) }}" class="btn btn-primary">Ver</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $events->links() }}
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-1 bg-dark fixed-bottom">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>
            
    </body>
</html>
