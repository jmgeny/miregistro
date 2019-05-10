@extends('layouts.principal')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Eventos</div>

                <div class="card-body">
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
                            <th>Lista</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $event)
                        <tr>
                            <td>{{ $event->organizer->nombre }}</td>
                            <td>Deporte</td>
                            <td>{{ $event->nombre }}</td>
                            <td>{{ $event->fecha }}</td>
                            <td>cantidad</td>
                            <td>inscribirse</td>
                            <td>editar</td>
                            <td>listar</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
