@extends('layouts.principal')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-10">    
            <div class="card mb-3">
                <div class="card-header">
                    <a href="#" class="btn btn-primary float-right">Editar</a>
                    <h4>Organizador: {{ $organizer->nombre }}</h4>
                </div>  
                  <img src="https://via.placeholder.com/728x90.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><h6><i class="fas fa-city"></i> {{ $organizer->direccion }}</h6></p>
                    <p class="card-text"><h6><i class="fas fa-envelope"></i> {{ $organizer->mail }}</h6></p>
                    <p class="card-text"><h6><i class="fas fa-phone-square"></i> {{ $organizer->telefono }}</h6></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection