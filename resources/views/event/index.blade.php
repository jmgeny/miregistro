@extends('layouts.principal')

@section('content')
<div class="container">
    <h1>Evento Futuros</h1>
    <div class="row shadow">
        @foreach ($eventFut as $event)
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
<hr>
    <h1>Evento Pasados</h1>
    <div class="row shadow">
        @foreach ($eventPas as $event)
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