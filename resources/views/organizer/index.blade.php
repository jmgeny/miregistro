@extends('layouts.principal')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('organizers.create') }}" class="btn btn-primary float-right">Crear</a>
                    <h4>Organizador</h4>
                </div>
                <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Organizador</th>
                            <th>Dirección</th>
                            <th>e-mail</th>
                            <th>Eventos</th>
                            <th>Editar</th>
                            <th>Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($organizers as $organizer)
                        <tr>
                            <td>{{ $organizer->user->name }}</td>
                            <td>{{ $organizer->nombre }}</td>
                            <td>{{ $organizer->direccion }}</td>
                            <td>{{ $organizer->mail }}</td>
                            <td>{{ $organizer->events()->count() }}</td>
                            <td><a href="{{ route('organizers.edit',$organizer->id) }}" class="btn btn-warning">Editar</a></td>
                            <td><a href="{{ route('organizers.show',$organizer->id) }}" class="btn btn-primary">Ver</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>   
                </div> {{-- card-body --}}

            </div> {{-- card --}}
        </div>
    </div>
</div>
@endsection