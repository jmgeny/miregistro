@extends('layouts.principal')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('athletes.index') }}" class="btn btn-primary float-right">Listar</a>
                    <h4>Crear Atleta</h4>
                </div>

                <div class="card-body">
                    {!! Form::open(['route' => 'athletes.store', 'files' => true]) !!}
                    @include('athlete.partials.form')
                    {!! Form::close() !!}   
                </div> {{-- card-body --}}
            </div> {{-- card --}}
        </div>
    </div>
</div>
@endsection