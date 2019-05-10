@extends('layouts.principal')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Organizador
                    <a href="{{ route('organizers.create') }}" class="btn btn-primary">Crear</a>
                </div>
                <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Organizador</th>
                            <th>Dirección</th>
                            <th>e-mail</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($organizers as $organizer)
                        <tr>
                            <td>{{ $organizer->user->name }}</td>
                            <td>{{ $organizer->nombre }}</td>
                            <td>{{ $organizer->direccion }}</td>
                            <td>{{ $organizer->mail }}</td>
                            <td><a href="{{ route('organizers.edit',$organizer->id) }}">Editar</a></td>
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