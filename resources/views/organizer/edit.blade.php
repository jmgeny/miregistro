@extends('layouts.principal')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Organizador</div>

                <div class="card-body">
                    {!! Form::model($organizer, ['route' => ['organizers.update', $organizer->id], 'method' =>'PUT', 'files' => true]) !!}
                    @include('organizer.partials.form')
                    {!! Form::close() !!}   
                </div> {{-- card-body --}}
            </div> {{-- card --}}
        </div>
    </div>
</div>
@endsection