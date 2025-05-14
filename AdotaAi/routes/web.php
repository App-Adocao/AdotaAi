<?php

use App\Http\Controllers\AdministracaoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tobias', [AdministracaoController::class, 'criarAdocao'])->name('criarAdocao');
