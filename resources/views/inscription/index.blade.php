@extends('layouts.principal')

@section('content')
<div class="container">
{{--     <h3>Inscripcion a Evento</h3>
    <hr>
 --}}    <section class="shadow">
        {{-- <p>Si esta conectado muestro los datos del atleta para verificalo</p> --}}
    <h2>Inscribirme a <strong>{{ $event->name }}</strong></h2>
    </section>
    <hr>
    <section>
        @guest
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 shadow">
                <form action="{{ route('inscriptions.verDNI') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group mb-2">
                        <label for="exampleInputEmail1">Ingresar DNI</label>
                        <input type="number" name="numeroDni" class="form-control" id="numeroDni" aria-describedby="dniHelp" placeholder="Ingresar el DNI">
                        {{-- <small id="emailHelp" class="form-text text-muted">Ingrese el DNI</small> --}}
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
        @else
        <h4>Atleta: {{ Auth::user()->name }}</h4>
        <br>

        <div class="row shadow">
            <div class="col-md-6">
                <div class="card-body">
                    <table class="table">
                        <tbody>
                          <tr>
                            <td><mark>DNI</mark></td>
                            <td>{{ $athlete->dni }}</td>
                        </tr>
                        <tr>
                            <td><mark>e-mail</mark></td>
                            <td>{{ $athlete->user->email }}</td>
                        </tr>
                        <tr>
                            <td><mark>Dirección</mark></td>
                            <td>{{ $athlete->direccion }}</td>
                        </tr>
                        <tr>
                            <td><mark>Fecha de Nacimiento</mark></td>
                            <td>{{ $athlete->date }}</td>
                        </tr>
                        <tr>
                            <td><mark>Genero</mark></td>
                            @if($athlete->genero === 'F')
                            <td>Femenino</td>
                            @else
                            <td>Masculino</td>
                            @endif
                        </tr>
                        <tr>
                            <td><mark>Teléfono</mark></td>
                            <td>{{ $athlete->telefono }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-6 text-center">
            <img src=" {{ $athlete->avatar }} " alt="{{ $athlete->apellido }}" width="50%" >
        </div>
    </div>
        <div class="row">
            <div class="col-md-6">
        <a href="{{ route('athletes.edit',$athlete->id) }}" class="btn btn-warning">Editar Datos</a>
        {{-- <a href="#" class="btn btn-primary">Inscribirse</a>                 --}}
            </div>
            <div class="col-md-6">
                                <form action="{{ route('inscriptions.inscribir', $event->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method">
                                    <button class="btn btn-success">Inscribirse</button>
                                </form>
            </div>
        </div>
    @endguest
    </section>


</div>
@endsection