@extends('admin.template.main')

@section('title','listar usuarui')

@section('content')
  <a href="{{ URL('admin/passengers/create') }}" class="btn btn-info">Registrar Nuevos Usuarios</a>
  <br>
  <br>
  <table class="table table-striped">
      <thread>
        <th>Id</th>
        <th>Nombre</th>
        <th>Last</th>
        <th>Email</th>
        <th>Estado</th>
      </thread>

        @foreach ($passengers as $passenger)
          <tr>
            <td>{{$passenger->pas_name}}</td>
            <td>{{$passenger->pas_mail}}</td>
            <td>{{$passenger->pas_last}}</td>
            <td>{{$passenger->pas_mail}}</td>
            <th>{{$passenger->id}}</th>
            <td>
              @if ($passenger->state->state=="Activo")
                  <span class="btn btn-primary">{{$passenger->state->state}}</span>
                @else
                  <span class="btn btn-success">{{$passenger->state->state}}</span>
              @endif

            </td>
            <td><a href="{{ route('admin.passengers.destroy',$passenger->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
                <a href="{{ route('passengers.edit',$passenger->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
            </td>
          </tr>

        @endforeach
      </tbody>
  </table>
{{!!$passengers->render()!!}}
@endsection
