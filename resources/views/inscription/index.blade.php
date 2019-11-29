@extends('layouts.principal')

@section('content')
<div class="container">
    <h1>Inscripción Index</h1>

        <div class="row shadow">
            <div class="col-sm-8">
                <h5>{{ $event->name }} - {{ $event->date }} - {{ $event->sport->name }}</h5>
            </div>
            <div class="col-sm-4">    
                <h4>Nombre del inscripto</h4>
                @guest
                    <a href="{{ route('login') }}" class="btn btn-primary">Ingresar</a>
                    <a href="{{ route('register') }}" class="btn btn-primary">Registrarse</a>
                @else
                    <a href="{{ route('inscriptions.show',$event->id) }}"><h4>Inscribir a {{ Auth::user()->athlete->name }}</h4></a>

                @endguest
            </div>    
        </div>
        <hr>
        <div class="row shadow">
             <div class="col-sm-12">
                <p><strong>Evento:</strong> {{ $event->name }} <strong>Atleta:</strong> 
                    {{-- {{ Auth::user()->athlete->name }} {{ Auth::user()->athlete->apellido }} <strong>User:</strong> {{ Auth::user()->name }} --}}
                </p>

            </div> 
        </div>
        <hr>
        <div class="row shadow">
            <div class="col-sm-12">
                <h5>Datos a validar del atleta</h5>
            </div>    
        </div>
    
</div>
@endsection