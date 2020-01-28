  <div class="form-group">
    {!! Form::label('organizer_id','Organizador') !!}
    {!! Form::select('organizer_id', \App\Organizer::pluck('name','id') ,null, ['class'=> 'form-control']) !!}
  </div>    
  <div class="form-group">
    {!! Form::label('sport_id','Deporte') !!}
    {!! Form::select('sport_id', \App\Sport::pluck('name','id') ,null, ['class'=> 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('specification_id','Distancia / Specificación') !!}
    {!! Form::select('specification_id', \App\Specification::pluck('description','id'),null,['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('city_id','Ciudad') !!}
    {!! Form::select('city_id', \App\City::pluck('name','id') ,null, ['class'=> 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class'=> 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('date', 'Fecha') !!}
    {!! Form::date('date', null, ['class'=> 'form-control']) !!}
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