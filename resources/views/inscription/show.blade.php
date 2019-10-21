@extends('layouts.principal')

@section('content')
<div class="container">
    <h1>Inscripción</h1>
    <div class="card">
        <div class="card-header">
            <a href="{{ route('events.index') }}" class="btn btn-primary float-right">Eventos</a>
            <h4>{{ $event->nombre }}</h4>
        </div>
        <div class="card-body borde">
            <div class="row">
                <div class="col-sm-8">
                    <h5><i class="fas fa-city"></i> {{ $event->city->nombre }}</h5>
                    <h5><i class="far fa-calendar-alt"></i> {{ $event->fecha }}</h5>

                    <h5 class="card-title">{{ $event->specification->nombre }} - {{ $event->specification->descripcion }}</h5>
                </div>
                <div class="col-sm-4">    
                    <a href="{{ route('inscriptions.create') }}" class="btn btn-primary float-right">Inscribirme</a>
                </div>    
            </div>
        </div>    


    </div>
</div>
@endsection