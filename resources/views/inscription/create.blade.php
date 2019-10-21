@extends('layouts.principal')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('inscriptions.index') }}" class="btn btn-primary float-right">Listar</a>
                    <h4>Generar Inscripción</h4>
                </div>

                <div class="card-body">
                    {!! Form::open(['route' => 'inscriptions.store']) !!}
                    	
                    	@include('inscription.partials.form')

                    {!! Form::close() !!}   
                </div> {{-- card-body --}}
            </div> {{-- card --}}
        </div>
    </div>
</div>
@endsection