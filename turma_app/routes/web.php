<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\DisciplinaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aluno', [AlunoController::class,'index']);
Route::get('/disciplina', [DisciplinaController::class,'index']);

Route::get('/home', function () {
    return view(view: 'home');
});