  <div class="form-group">
    {!! Form::label('event_id','Evento') !!}
    {!! Form::select('event_id', \App\Event::pluck('nombre','id') ,null, ['class'=> 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('athlete_id','Atleta') !!}
    {!! Form::select('athlete_id', \App\Athlete::pluck('nombre','id') ,null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Enviar',['class' => 'btn btn-primary']) !!}
  </div>     