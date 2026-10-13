<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias', [App\Http\Controllers\CategoriasController::class, 'index']);
Route::get('/clientes', [App\Http\Controllers\ClientesController::class, 'index']);
Route::get('/empleados', [App\Http\Controllers\EmpleadosController::class, 'index']);
Route::get('/pedidos', [App\Http\Controllers\PedidosController::class, 'index']);
Route::get('/productos', [App\Http\Controllers\ProductosController::class, 'index']);
Route::get('/proveedores', [App\Http\Controllers\ProveedoresController::class, 'index']);
Route::get('/detalles-pedidos', [App\Http\Controllers\DetallesPedidoController::class, 'index']);
