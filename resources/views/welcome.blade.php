<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body >
        <h1>Teste</h1>
        <img src="/img/banner.jpg" alt="Banner" height="300" width="100%">
        <p>Seu nome: {{ $nome }}</p>
        <p>Sua idade: {{ $idade }}</p>

        @if($nome == "Pedro")
            <p>O nome é Pedro</p>
        @else
            <p>O nome não é Pedro</p>
        @endif

        {{-- Comentários no Blade --}}
        @for($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }} - {{$i}}</p>
        @endfor

        @foreach($nomes as $nome)
            <p>{{ $loop->index }} - {{ $nome }}</p>
        @endforeach
    </body>
</html>
