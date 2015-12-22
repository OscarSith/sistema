@extends('layouts.master')

@section("main")
<h1>humberto</h1>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Ejemplo de agregar usuario</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    {!! Form::open(array('route' => 'addproveedor')) !!}
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
            <input type="text" name="nombre" class="form-control" id="nombre">
        </div>
        <div class="form-group">
            <label for="apellido">Direccion</label>
            <input type="text" name="direccion" class="form-control" id="apellido">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">localidad</label>
            <input type="text" name="localidad" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">contacto</label>
            <input type="text" name="contacto" class="form-control" id="exampleInputPassword1" placeholder="agegar contacto">
        </div>
    </div><!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Agregar proveedor</button>
    </div>
    {!! Form::close() !!}
    <!-- form end -->

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Listado de proveedores</h3>
        </div><!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>direccion</th>
                        <th>localidad</th>
                        <th>contacto</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($proveedores as $proveedor)
                    <tr>
                        <td>{{ $proveedor->nombre }}</td>
                        <td>{{ $proveedor->direccion }}</td>
                        <td>{{ $proveedor->localidad }}</td>
                        <td>{{ $proveedor->contacto }}</td>
                        <td><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a></td>
                    </tr>
                    @empty
                    <tr><td>No hay registros</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div><!-- /.box-body -->
    </div>
</div>
@endsection