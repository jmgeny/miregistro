@extends('layouts.principal')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('events.index') }}" class="btn btn-primary float-right">Listar</a>
                    <h4>Crear Evento</h4>
                </div>

                <div class="card-body">
                    {!! Form::open(['route' => 'events.store', 'files' => true]) !!}
                    	@include('event.partials.form')
                    {!! Form::close() !!}   
                </div> {{-- card-body --}}
            </div> {{-- card --}}
        </div>
    </div>
</div>
@endsection