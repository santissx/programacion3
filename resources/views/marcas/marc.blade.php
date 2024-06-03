@extends('layouts.app')

@section('title', 'Lista de Productos')

@section('content')
    <h1>Lista de Productos</h1>
    <button type="button" class="btn btn-primary">Agregar</button>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre de la marca</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Oreo</td>
                <td><button type="button" class="btn btn-success">Modificar</button> <button type="button" class="btn btn-danger">Eliminar</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Pepsi</td>
                <td><button type="button" class="btn btn-success">Modificar</button> <button type="button" class="btn btn-danger">Eliminar</button></td>
            </tr>
            <!-- Agrega más filas según sea necesario -->
        </tbody>
    </table>
@endsection