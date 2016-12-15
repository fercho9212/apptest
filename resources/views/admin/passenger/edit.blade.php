@extends('admin.template.main')
@section('title','Editar Usuario');
@section('content')
  <div class="col-md-12">
    <div class="col-md-4">
      <h3>Editar {{$passenger->pas_name}}</h3>
    </div>

    <div class="col-md-4">
      {!! Form::open(['route'=>'passengers.update','method'=>'PUT']) !!}
          <div class="form-group">
            {!!Form::label('name','Nombre') !!}
            {!!Form::text('pas_name',$passenger->pas_name,['class'=>'form-control','required','placeholder'=>'nombre Completo'])!!}
          </div>
          <div class="form-group">
            {!!Form::label('last','Apellido') !!}
            {!!Form::text('pas_last',$passenger->pas_last,['class'=>'form-control','required','placeholder'=>'Apellido Completo'])!!}
          </div>
          <div class="form-group">
            {!!Form::label('email','Correo') !!}
            {!!Form::text('pas_mail',$passenger->pas_mail,['class'=>'form-control','required','placeholder'=>'Email'])!!}
          </div>
          <div class="form-group">
            {!!Form::label('username','Username') !!}
            {!!Form::text('pas_username',$passenger->pas_username,['class'=>'form-control','required','placeholder'=>'username'])!!}
          </div>
          <div class="form-group">
            {!!Form::label('password','Password') !!}
            {!!Form::password('pas_password',$passenger->pas_password,['class'=>'form-control','required','placeholder'=>'*****'])!!}
          </div>
          <div class="form-group">
            {!!Form::label('phone','Telefono') !!}
            {!!Form::text('pas_phone',$passenger->pas_phone,['class'=>'form-control','placeholder'=>'Telefono'])!!}
          </div>
          <div class="form-group">
            {!!Form::label('state','Estado') !!}
            {!!Form::select('state_id',['1'=>'activo'],$passenger->state->state,['class'=>'form-control'])!!}
          </div>
          <div class="form-group">
            {!!Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
          </div>

      {!! Form::close() !!}
    </div>
    <div class="col-md-4"></div>
  </div>

@endsection
