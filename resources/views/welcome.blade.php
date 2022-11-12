<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body >
        <h1>Teste</h1>
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
