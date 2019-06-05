@extends('layouts.principal')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h2>Eventos disponibles</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Organizador</th>
                                    <th>Deporte</th>
                                    <th>Nombre</th>
                                    <th>Fecha</th>
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
@endsection
