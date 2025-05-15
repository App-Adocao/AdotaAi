<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetalhesAdocaoController extends Controller
{
    public function mostrarDetalhes(){

        return view('detalhes-adocao');
    }
}
