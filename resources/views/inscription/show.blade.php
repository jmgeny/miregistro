@extends('layouts.principal')

@section('content')
<div class="container">
    <h1>Inscripción Show</h1>
<div class="card-body borde">
            <div class="row">
                <div class="col-sm-8">
                    <h5>{{ $event->name }} - {{ $event->date }} - {{ $event->sport->name }}</h5>
                </div>
                <div class="col-sm-4">    
            @guest
                <a href="{{ route('login') }}" class="btn btn-primary">Ingresar</a>
                <a href="{{ route('register') }}" class="btn btn-primary">Registrarse</a>
            @else
                <a href="#"><h4>Inscribir a {{ Auth::user()->name }}</h4></a>
                
            @endguest
                </div>    
            </div>
        </div>    
</div>
@endsection
