@extends('layouts.principal')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('events.edit',$event->id) }}" class="btn btn-primary float-right">Editar</a>
            <h4>{{ $event->nombre }}</h4>
            <h6><i class="far fa-calendar-alt"></i> {{ $event->fecha }} - <i class="fas fa-city"></i> {{ $event->city->nombre }}</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="card-title">Organizador</h5>
                    <p class="card-text">{{ $event->organizer->nombre }}</p>
                    <h5 class="card-title">Deporte</h5>
                    <p class="card-text">{{ $event->sport->nombre }}</p>
                    <h5 class="card-title">Dirección</h5>
                    <p class="card-text">{{ $event->direccion }}</p>
                </div>
                <div class="col-sm-6">
                    <h5 class="card-title">Descripción</h5>
                    <p class="card-text">{{ $event->descripcion }}</p>
                    <h5 class="card-title">Cronograma</h5>
                    <p class="card-text">{{ $event->cronograma }}</p> 
                </div>
            </div>
        </div>

    </div>
</div>
@endsection