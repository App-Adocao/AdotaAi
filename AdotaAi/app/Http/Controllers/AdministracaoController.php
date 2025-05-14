<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministracaoController extends Controller
{
    public function criarAdocao(){

        return view('criar-adocao');
    }
}
