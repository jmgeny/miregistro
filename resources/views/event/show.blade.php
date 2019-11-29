@extends('layouts.principal')

@section('content')
<div class="container">
    <h1>Evento</h1>
    <div class="card">
      <div class="card-header text-center">
        <h5 class="card-title">{{ $event->name }}</h5>
        <h6><i class="far fa-calendar-alt"></i> {{ $event->date }} - <i class="fas fa-city"></i> {{ $event->city->nombre }}</h6>
      </div>
      <div class="card-body">
        <h5 class="card-title">{{ $event->athletes->count() }} Inscriptos</h5>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Apellido</th>
                        <th>Nacimiento</th>
                        <th>Confimado</th>
                    </tr>                    
                </thead>
                <tbody>
                    @foreach ($event->athletes as $athlete)
                        <tr>
                            <td><a href="#">{{ $athlete->apellido }}, {{ $athlete->nombre }}</a></td>
                            <td>{{ $athlete->date }}</td>
                            <td>SI/NO</td>
                        </tr>                    
                    @endforeach
                </tbody>
            </table>
      </div>
      <div class="card-footer text-muted">
        @guest
            <a href="{{ route('login') }}" class="btn btn-primary">Ingresar</a>
            <a href="{{ route('register') }}" class="btn btn-primary">Registrarse</a>
        @else
            <a href="{{ route('inscriptions.index',$event->id) }}" class="btn btn-primary">Anotarme</a>
        @endguest
        {{-- me inscribo y voy directo a editar mis datos --}}
      </div>
    </div>
</div>
@endsection

{{--     <div class="card">
        <div class="card-header">
            <a href="{{ route('inscriptions.show',$event->id) }}" class="btn btn-primary float-right">Inscribirme</a>
            <h4>{{ $event->name }} organizado por <a href="{{ route('organizers.show',$event->organizer->id) }}">{{ $event->organizer->nombre }}</a></h4>
            <h6><i class="far fa-calendar-alt"></i> {{ $event->date }} - <i class="fas fa-city"></i> {{ $event->city->nombre }}</h6>
        </div>
        <div class="card-body borde">
            <div class="row text-center">
                <div class="col-sm-4">
                    <h5 class="card-title">Deporte</h5>
                    <p class="card-text">{{ $event->sport->nombre }}</p>
                </div>
                <div class="col-sm-4">
                    <h5 class="card-title">{{ $event->specification->nombre }}</h5>
                    <p class="card-text">{{ $event->specification->descripcion }}</p>
                </div>
                <div class="col-sm-4">    
                    <h5 class="card-title">Dirección</h5>
                    <p class="card-text">{{ $event->direccion }}</p>
                </div>    
            </div>
        </div>    
        <div class="card-body borde">  
            <div class="row">    
                <div class="col-sm-12">
                    <h5 class="card-title">Descripción</h5>
                    <p class="card-text">{{ $event->descripcion }}</p>
                    <h5 class="card-title">Cronograma</h5>
                    <p class="card-text">{{ $event->cronograma }}</p> 
                </div>
            </div>
        </div>
        <a href="{{ route('events.edit',$event->id) }}" class="btn btn-primary float-right">Editar</a>
    </div> --}}