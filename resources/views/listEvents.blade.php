<div class="container-fluid">
    <div class="row">
        <div class="col-6 shadow">
            <h5 class="text-title">Eventos Futuros</h5>
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
                            @foreach($eventsFut as $event)
                            <tr>
                                <td><a href="{{ route('organizers.show',$event->organizer->id) }}">{{ $event->organizer->name }}</a></td>
                                <td>{{ $event->sport->name }}</td>
                                <td>{{ $event->name }}</td>
                                <td>{{ $event->date }}</td>
                                <td><a href="{{ route('events.show',$event->id) }}" class="btn btn-primary">Ver</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $eventsFut->links() }} 
        </div>
        <div class="col-6 shadow">
            <h5 class="text-title">Eventos Pasados</h5>
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
                            @foreach($eventsPas as $event)
                            <tr>
                                <td><a href="{{ route('organizers.show',$event->organizer->id) }}">{{ $event->organizer->name }}</a></td>
                                <td>{{ $event->sport->name }}</td>
                                <td>{{ $event->name }}</td>
                                <td>{{ $event->date }}</td>
                                <td><a href="#" class="btn btn-primary">Resultado</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $eventsPas->links() }} 
        </div>      
    </div>
</div>