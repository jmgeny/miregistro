@extends('layouts.principal')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('events.show',$event->id) }}" class="btn btn-primary float-right">Ver</a>
                    <h4>Editar Evento</h4>
                </div>
                <div class="card-body">
                    {!! Form::model($event, ['route' => ['events.update', $event->id], 'method' =>'PUT', 'files' => true]) !!}
                    @include('event.partials.form')
                    {!! Form::close() !!}   
                </div> {{-- card-body --}}
            </div> {{-- card --}}
        </div>
    </div>
</div>
@endsection