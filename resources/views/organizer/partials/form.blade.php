  <div class="form-group">
    {!! Form::label('user_id', 'Usuario') !!}
    {!! Form::select('user_id',\App\User::orderBy('id')->pluck('name','id')
    ,null,['class' => 'form-control']) !!}
  </div>  

  <div class="form-group">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('direccion', 'Dirección') !!}
    {!! Form::text('direccion', null, ['class'=> 'form-control']) !!}
  </div>

   <div class="form-group">
    {!! Form::label('mail', 'e-mail') !!}
    {!! Form::text('mail', null, ['class'=> 'form-control']) !!}
  </div> 

  <div class="form-group">
    {!! Form::label('telefono', 'Teléfono') !!}
    {!! Form::text('telefono', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Enviar',['class' => 'btn btn-primary']) !!}
  </div>      