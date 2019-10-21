@extends('layouts.principal')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><a href="{{ route('athletes.create') }}" class="btn btn-primary float-right">Crear</a><h4>Atletas</h4></div>

                <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Apellido y Nombre</th>
                            <th>dni</th>
                            <th>email</th>
                            <th>Ver</th>
                            <th>Editar</th>
                            <th>Elimina</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($athletes as $athlete)
                        <tr>
                             <td>{{ $athlete->apellido }}, {{ $athlete->nombre }}</td>
                            <td>{{ $athlete->dni }}</td>
                            <td>{{ $athlete->user->email }}</td>
                            <td><a href="{{ route('athletes.show',$athlete->id) }}" class="btn btn-primary">Ver</a></td>
                            <td><a href="{{ route('athletes.edit',$athlete->id) }}" class="btn btn-warning">Editar</a></td>
                            <td>@if($athlete->status === 1)
                                <form action="{{ route('athletes.destroy', $athlete->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger">Eliminar</button>                                
                                </form>
                                @endif
                            </td>
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