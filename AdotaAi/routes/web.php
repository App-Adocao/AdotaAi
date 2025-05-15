<?php

use App\Http\Controllers\AdministracaoController;
use App\Http\Controllers\DetalhesAdocaoController;
use App\Http\Controllers\ListaAdocaoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tobias', [AdministracaoController::class, 'criarAdocao'])->name('criarAdocao');

Route::get('/listaAdocao', [ListaAdocaoController::class, 'mostrarLista'])->name('mostrarLista');

Route::get('/detalhesAdocao', [DetalhesAdocaoController::class, 'mostrarDetalhes'])->name('mostrarDetalhes');

