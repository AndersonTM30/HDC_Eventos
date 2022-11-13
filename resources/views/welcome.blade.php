@extends('layouts.main') {{-- Extende o layout --}}
    @section('title', 'HDC Events') {{-- Cria um title dinâmico --}}

    @section('content') {{-- Cria o conteúdo da página welcome --}}
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
    @endsection
