@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1>Algum titulo</h1>
<img src="/img/banner.jpg" alt="">
@if(10 > 15)
    <p>A condicao é true</p>
@endif

<p>{{$nome}}</p>

@if($nome === 'Pedro')
    <p>O nome é Pedro</p>
@elseif($nome === 'Marco')
    <p>O nome é {{$nome}} e ele tem {{$idade}} anos e e um {{$profissao}}.</p>
@else
    <p>O nome não é pedro</p>
@endif

@for($i = 0,$iMax = count($arr); $i < $iMax; $i++)
    <p>{{$arr[$i]}} - {{$i}}</p>
    @if($i == 2)
        <p>O i é igual a 2</p>
    @endif
@endfor

@foreach($nomes as $nome)
    <p>{{$loop->index}}</p>
    <p>{{$nome}}</p>
@endforeach

@php
    $nome = 'fulano';
    echo $nome;
@endphp

@endsection
