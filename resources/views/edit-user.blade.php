@extends('layouts.master')

@section('main')
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Ejemplo de editar usuario</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    {!! Form::model($user, array('route' => ['editUser', $user->id], 'method' => 'put')) !!}
        @if (Session::has('success_message'))
        <div class="alert alert_success">
            {{ Session::get('success_message') }}
        </div>
        @elseif (Session::has('error_message'))
            {{ Session::get('error_message') }}
        @endif
        <div class="box-body">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>
        </div><!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Agregar</button>
        </div>
    {!! Form::close() !!}
    <!-- form end -->
</div>
@endsection