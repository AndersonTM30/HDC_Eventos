@extends('layouts.main') {{-- Extende o layout --}}
    @section('title', 'HDC Events') {{-- Cria um title dinâmico --}}

    @section('content') {{-- Cria o conteúdo da página welcome --}}
        <div id="search-container" class="col-md-12">
            <h1>Busque um evento</h1>
            <form action="/" method="GET">
                <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
            </form>
        </div>
        <div id="events-container" class="col-md-12">
            @if($search)
                <h2>Buscando por: {{ $search }}</h2>
            @else
                <h2>Próximos Eventos</h2>
                <p class="subtitle">Veja os eventos dos próximos dias</p>
            @endif
            <div id="cards-container" class="row">
                @foreach($events as $event)
                    <div class="card col-md-3">
                        <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                        <div class="card-body">
                            <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p><!-- converte para o tipo de data brasileiro -->
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="card-participants">{{ count($event->users) }} Participantes</p>
                            <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                        </div>
                    </div>
                @endforeach
                @if(count($events) == 0 && $search)
                    <p>Não foi possível enconctrar nenhum evento com {{ $search }}! <a href="/">Ver Todos</a></p>
                @elseif(count($events) == 0)
                    <p>Não há eventos disponíveis</p>
                @endif
            </div>
        </div>
    @endsection
