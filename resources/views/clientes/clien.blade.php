@extends('layouts.app')

@section('title', 'Lista de Clientes')

@section('content')
    <h1>Lista de clientes</h1>
    <button type="button" class="btn btn-primary">Agregar</button>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Direccion</th>
                <th>DNI</th>
                <th>Cuit</th>
                <th>Telefono</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Ale</td>
                <td>Garcia</td>
                <td>Av antartida arg</td>
                <td>43125555</td>
                <td>3704858585</td>
                <td><button type="button" class="btn btn-success">Modificar</button> <button type="button" class="btn btn-danger">Eliminar</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Rodrigo</td>
                <td>Zanin</td>
                <td>Av pantaleon gomez</td>
                <td>40255255 </td>
                <td>3705555555</td>
                <td><button type="button" class="btn btn-success">Modificar</button> <button type="button" class="btn btn-danger">Eliminar</button></td>
            </tr>
            <!-- Agrega más filas según sea necesario -->
        </tbody>
    </table>
@endsection