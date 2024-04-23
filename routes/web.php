<?php

use App\Http\Controllers\LineaProduccionController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/linea_produccion/lista', [LineaProduccionController::class, 'index']);
Route::get('/linea_produccion/crear', [LineaProduccionController::class, 'create']);
Route::post('/linea_produccion/crear', [LineaProduccionController::class, 'store']);
Route::get('/linea_produccion/editar/{id}', [LineaProduccionController::class, 'edit']);
Route::post('/linea_produccion/editar/{id}', [LineaProduccionController::class, 'update']);
Route::get('/linea_produccion/eliminar/{id}', [LineaProduccionController::class, 'destroy']);
Route::get('/linea_produccion/mostrar/{id}', [LineaProduccionController::class, 'show']);


Route::get('/producto/lista', [ProductoController::class, 'index']);
Route::get('/producto/crear', [ProductoController::class, 'create']);
Route::post('/producto/crear', [ProductoController::class, 'store']);
Route::get('/producto/editar/{id}', [ProductoController::class, 'edit']);
Route::post('/producto/editar/{id}', [ProductoController::class, 'update']);
Route::get('/producto/eliminar/{id}', [ProductoController::class, 'destroy']);

