@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

<h1>Esta é a pagina de produtos</h1>

@if($busca !== '')
    <p>{{$busca}}</p>
@endif

<a href="/">Voltar</a>


@endsection
