@extends('layouts.principal')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-10">
      <div class="card mb-3">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="{{ $organizer->logo }}" class="card-img-top" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-header">
              <a href="{{ route('organizers.index') }}" class="btn btn-primary float-right">Listar</a>                    
              <h5 class="card-title">{{ $organizer->nombre }}</h5>
            </div>
            <div class="card-body">
              <p class="card-text"><h6><i class="fas fa-city"></i> {{ $organizer->direccion }}</h6></p>
              <p class="card-text"><h6><i class="fas fa-envelope"></i> {{ $organizer->mail }}</h6></p>
              <p class="card-text"><h6><i class="fas fa-phone-square"></i> {{ $organizer->telefono }}</h6></p>
            </div>
            <div class="card-footer">
              <a href="{{ route('organizers.edit',$organizer->id) }}" class="btn btn-primary float-right">Editar</a>
            </div>
          </div>
        </div>
      </div>            
    <h5>Listados de eventos del Organizador</h5>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Organizador</th>
                            <th>Deporte</th>
                            <th>Nombre</th>
                            <th>Fecha</th>
                            <th>Cantidad</th>
                            <th>Inscribirse</th>
                            <th>Editar</th>
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
                            <td><a href="{{ route('events.edit',$event->id) }}" class="btn btn-warning">Editar</a></td>
                            <td><a href="{{ route('events.show',$event->id) }}" class="btn btn-primary">Ver</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

    </div>
  </div>
</div>
@endsection