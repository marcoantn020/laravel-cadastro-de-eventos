@extends('layouts.main')

@section('title', 'Produto')

@section('content')

    @if($id !== null)
        <h1>parametro {{ $id }}</h1>
    @endif
<a href="/">Voltar</a>


@endsection
