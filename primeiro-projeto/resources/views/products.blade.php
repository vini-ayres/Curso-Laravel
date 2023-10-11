@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
<h1>Tela de produtos</h1>
@if ($busca != null)
    <p>O usuário está buscando por: {{ $busca }}</p>
@endif
@endsection('content')