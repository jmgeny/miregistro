@extends('layouts.principal')

@section('content')
<div class="container">
    <h1>Evento Index</h1>
    <div class="row">
        @foreach ($events as $event)
            <div class="col-md-3">
                <div class="card text-center">
                  <div class="card-header">
                    <h5 class="card-title">{{ $event->name }}</h5>
                    <h6>Inscriptos: {{ $event->athletes_count }}</h6>
                  </div>
                  <img src="https://lorempixel.com/90/90" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6><i class="far fa-calendar-alt"></i> {{ $event->date }} - <i class="fas fa-city"></i> {{ $event->city->name }} </h6>
                    <p class="card-text">{{ $event->description }}</p>
                  </div>
                  <div class="card-footer text-muted">
                    <a href="{{ route('events.show',$event->id) }}" class="btn btn-primary">Ver</a>
                  </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

{{-- @extends('layouts.principal')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> 
                    <a href="{{ route('events.create') }}" class="btn btn-primary float-right">Crear</a>
                    <h4>Eventos</h4>
                </div>

                <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Organizador</th>
                            <th>Deporte</th>
                            <th>Distancia</th>
                            <th>Nombre del Evento</th>
                            <th>Fecha</th>
                            <th>Inscripción</th>
                            <th>Editar</th>
                            <th>Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $event)
                        <tr>
                            <td><a href="{{ route('organizers.show',$event->organizer->id) }}">{{ $event->organizer->nombre }}</a></td>
                            <td>{{ $event->sport->nombre }}</td>
                            <td>{{ $event->specification->nombre }}</td>
                            <td>{{ $event->nombre }}</td>
                            <td>{{ $event->fecha }}</td>
                            <td><a href="{{ route('inscriptions.show',$event->id) }}" class="btn btn-primary">Inscripción</a></td>
                            <td><a href="{{ route('events.edit',$event->id) }}" class="btn btn-warning">Editar</a></td>
                            <td><a href="{{ route('events.show',$event->id) }}" class="btn btn-primary">Ver</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> 
                  {{ $events->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
