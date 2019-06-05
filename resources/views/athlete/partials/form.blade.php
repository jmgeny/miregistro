  <div class="form-group">
    {!! Form::label('apellido', 'Apellido') !!}
    {!! Form::text('apellido', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre', null, ['class'=> 'form-control']) !!}
  </div>

   <div class="form-group">
    {!! Form::label('dni', 'DNI') !!}
    {!! Form::text('dni', null, ['class'=> 'form-control']) !!}
  </div>

   <div class="form-group">
    {!! Form::label('email', 'e-mail') !!}
    {!! Form::text('email', null, ['class'=> 'form-control']) !!}
  </div>
  
  <div class="form-group">
    {!! Form::label('direccion', 'Dirección') !!}
    {!! Form::text('direccion', null, ['class'=> 'form-control']) !!}
  </div>      

  <div class="form-group">
    {!! Form::label('nacimiento', 'Fecha de nacimiento') !!}
    {!! Form::date('nacimiento', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('genero', 'Genero') !!}
    {!! Form::select('genero', ['0'=> 'Hombre', '1'=>'Mujer'],null, ['class'=> 'form-control'] ) !!}
  </div>

  <div class="form-group">
    {!! Form::label('telefono', 'Teléfono') !!}
    {!! Form::text('telefono', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
  	{!! Form::label('avatar', 'Foto') !!}
  	{!! Form::file('avatar') !!}
  </div>

  <div class="form-group">
    {!! Form::label('state','Activo') !!}
    {!! Form::checkbox('state') !!}
  </div>   
  
  <div class="form-group">
    {!! Form::submit('Enviar',['class' => 'btn btn-primary']) !!}
  </div>      