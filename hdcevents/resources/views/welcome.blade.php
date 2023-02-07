<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>

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

    </body>
</html>
