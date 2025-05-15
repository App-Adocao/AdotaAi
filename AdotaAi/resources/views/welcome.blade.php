@extends('layouts.main')

@section('title', 'Home')

@section('content')
<a href="{{ route('criarAdocao') }}">Criar Adoção Tobias</a> <br>
<a href="{{ route('mostrarLista') }}">Lista de Adoção Cássio</a> <br>
<a href="{{ route('mostrarDetalhes') }}">Detalhes da Adoção Cássio</a> <br>
@endsection


