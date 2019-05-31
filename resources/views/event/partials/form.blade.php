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