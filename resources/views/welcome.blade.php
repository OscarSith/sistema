@extends('layouts.master')

@section('main')
<section class="content-header">
    <h1>MI titulo</h1>
    <h2>Agregar Usuario</h2>
    <div>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Ejemplo de agregar usuario</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            {!! Form::open(array('route' => 'addUser')) !!}
                @if (Session::has('success_message'))
                <div class="alert alert-success">
                    {{ Session::get('success_message') }}
                </div>
                @elseif (Session::has('error_message'))
                    {{ Session::get('error_message') }}
                @endif
                <div class="box-body">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="name" class="form-control" id="nombre">
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" name="lastname" class="form-control" id="apellido">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            {!! Form::close() !!}
            <!-- form end -->
        </div>
        <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Listado de usuarios</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-condensed">
                    <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>correo</th>
                          <th></th>
                        </tr>
                      </thead>
                    <tbody>
                    @forelse ($users as $user)
                        <tr>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->lastname }}</td>
                          <td>{{ $user->email }}</td>
                          <td><a href="{{ route('prepareEditUser', $user->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a></td>
                        </tr>
                    @empty
                        <tr><td>No hay registros</td></tr>
                    @endforelse
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div>
    </div>
</section>
@endsection