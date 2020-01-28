@extends('layouts.principal')

@section('content')
<div class="container">
  <h1>Organizador</h1>
  <div class="row justify-content-center shadow">
    <div class="col-sm-12">
      <div class="card mb-3">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="{{ $organizer->logo }}" class="card-img-top" alt="LogoOrganizador">
          </div>
          <div class="col-md-8">
            <div class="card-header">
              <a href="{{ route('organizers.index') }}" class="btn btn-primary float-right">Listar</a>                    
              <h5 class="card-title">{{ $organizer->name }}</h5>
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
    </div>
  </div>
  <hr>
  <div class="row shadow">
    <div class="col-md-12">
      <table class="table table-bordered">
        <thead>
          <tr>
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
            <td>{{ $event->sport->name }}</td>
            <td>{{ $event->name }}</td>
            <td>{{ $event->date }}</td>
            <td>cantidad</td>
            <td><a href="{{ route('inscriptions.index',$event->id) }}" class="btn btn-primary">Registrarse</a></td>
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