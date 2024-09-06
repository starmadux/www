<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\PedidosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', [ClientesController::class,'index']);
Route::get('/pedidos', [PedidosController::class,'index']);

Route::get('/home', function () {
    return view('home');
});