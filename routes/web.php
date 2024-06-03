<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clase1', function () {
    return view('index');
});

Route::get('/marcas', function () {
    return view('marcas.marc');
})->name('marcas');
Route::get('/clientes', function () {
    return view('clientes.clien');
})->name('clientes');

Route::get('/proveedores', function () {
    return view('proveedores.prov');
})->name('proveedores');
Route::get('/productos', function () {
    return view('productos.produc');
})->name('productos');
