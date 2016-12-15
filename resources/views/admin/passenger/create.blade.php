@extends('admin.template.main')

@section('content')
  <div class="col-md-12">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      {!! Form::open(['route'=>'passengers.store','method'=>'POST']) !!}
          <div class="form-group">
            {!!Form::label('name','Nombre') !!}
            {!!Form::text('pas_name',null,['class'=>'form-control','required','placeholder'=>'nombre Completo'])!!}
          </div>
          <div class="form-group">
            {!!Form::label('last','Apellido') !!}
            {!!Form::text('pas_last',null,['class'=>'form-control','required','placeholder'=>'Apellido Completo'])!!}
          </div>
          <div class="form-group">
            {!!Form::label('email','Correo') !!}
            {!!Form::text('pas_mail',null,['class'=>'form-control','required','placeholder'=>'Email'])!!}
          </div>
          <div class="form-group">
            {!!Form::label('username','Username') !!}
            {!!Form::text('pas_username',null,['class'=>'form-control','required','placeholder'=>'username'])!!}
          </div>
          <div class="form-group">
            {!!Form::label('password','Password') !!}
            {!!Form::password('pas_password',null,['class'=>'form-control','required','placeholder'=>'*****'])!!}
          </div>
          <div class="form-group">
            {!!Form::label('phone','Telefono') !!}
            {!!Form::text('pas_phone',null,['class'=>'form-control','placeholder'=>'Telefono'])!!}
          </div>
          <div class="form-group">
            {!!Form::label('state','Estado') !!}
            {!!Form::select('state_id',['1'=>'activo'],null,['class'=>'form-control'])!!}
          </div>
          <div class="form-group">
            {!!Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
          </div>

      {!! Form::close() !!}
    </div>
    <div class="col-md-4"></div>
  </div>

@endsection
