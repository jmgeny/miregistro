@extends('layouts.principal')

@section('content')
<div class="container">
    <h1>Evento</h1>
    <div class="card">
        <div class="card-header">
            <a href="{{ route('events.index') }}" class="btn btn-primary float-right">Listar</a>
            <h4>{{ $event->nombre }} organizado por <a href="{{ route('organizers.show',$event->organizer->id) }}">{{ $event->organizer->nombre }}</a></h4>
            <h6><i class="far fa-calendar-alt"></i> {{ $event->fecha }} - <i class="fas fa-city"></i> {{ $event->city->nombre }}</h6>
        </div>
        <div class="card-body borde">
            <div class="row text-center">
                <div class="col-sm-4">
                    <h5 class="card-title">Organizador</h5>
                    <p class="card-text">{{ $event->organizer->nombre }}</p>
                </div>
                <div class="col-sm-4">
                    <h5 class="card-title">Deporte</h5>
                    <p class="card-text">{{ $event->sport->nombre }}</p>
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
                    <pre class="card-text">{{ $event->descripcion }}</pre>
                    <h5 class="card-title">Cronograma</h5>
                    <pre class="card-text">{{ $event->cronograma }}</pre> 
                </div>
            </div>
        </div>
<a href="{{ route('events.edit',$event->id) }}" class="btn btn-primary float-right">Editar</a>
    </div>
</div>
@endsection