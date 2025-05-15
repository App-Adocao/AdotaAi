<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaAdocaoController extends Controller
{
    public function mostrarLista(){

        return view('lista-adocao');
    }
}
