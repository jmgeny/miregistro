  <div class="form-group">
    {!! Form::label('organizer_id','Organizador') !!}
    {!! Form::select('organizer_id', \App\Organizer::pluck('nombre','id') ,null, ['class'=> 'form-control']) !!}
  </div>    
  <div class="form-group">
    {!! Form::label('sport_id','Deporte') !!}
    {!! Form::select('sport_id', \App\Sport::pluck('nombre','id') ,null, ['class'=> 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('city_id','Ciudad') !!}
    {!! Form::select('city_id', \App\City::pluck('nombre','id') ,null, ['class'=> 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre', null, ['class'=> 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('fecha', 'Fecha') !!}
    {!! Form::date('fecha', null, ['class'=> 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('direccion', 'Dirección') !!}
    {!! Form::text('direccion', null, ['class'=> 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('descripcion', 'Descripción') !!}
    {!! Form::textarea('descripcion', null, ['class'=> 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('cronograma', 'Cronograma') !!}
    {!! Form::textarea('cronograma', null, ['class'=> 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('contacto', 'e-mail Contacto') !!}
    {!! Form::text('contacto', null, ['class'=> 'form-control']) !!}
  </div> 
  <div class="form-group">
    {!! Form::submit('Enviar',['class' => 'btn btn-primary']) !!}
  </div>     