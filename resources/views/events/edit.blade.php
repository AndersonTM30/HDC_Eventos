@extends('layouts.main')
    @section('title', 'Editando: ' . $event->title)

    @section('content') 
        <div id="event-create-container" class="col-md6 offset-md3">
            <h1>Editando: {{ $event->title }}</h1>
            <form action="/events/update/{{ $event->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="image">Imagem do Evento:</label>
                    <input type="file" name="image" placeholder="Imagem do evento" class="form-control-file" id="image">
                    <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
                </div>
                <div class="form-group">
                    <label for="title">Evento:</label>
                    <input type="text" name="title" placeholder="Nome do evento" value="{{ $event->title }}" class="form-control" id="title">
                </div>
                <div class="form-group">
                    <label for="date">Data do evento:</label>
                    <input type="date" name="date" placeholder="Nome do evento" value="{{ $event->date->format('Y-m-d') }}" class="form-control" id="date">
                </div>
                <div class="form-group">
                    <label for="city">Cidade:</label>
                    <input type="text" name="city" value="{{ $event->city }}" class="form-control" id="city">
                </div>
                <div class="form-group">
                    <label for="private">Evento é Privado?</label>
                    <select name="private" id="private" class="form-control">
                        <option value="0">Não</option>
                        <option value="1" {{ $event->private == 1 ? "selected='selected'" : "" }}>Sim</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Descrição:</label>
                    <textarea type="text" name="description" placeholder="Oque vai acontecer no evento" class="form-control" id="description">{{ $event->description }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="title">Adicione itens de infraestrutura:</label>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Cadeiras" {{ (in_array("Cadeiras", $event->items)) ? "checked='checked' "  :  ' '  }}> Cadeiras
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Palco" {{ (in_array("Palco", $event->items)) ? "checked='checked' "  :  ' '  }}> Palco
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Cerveja Grátis" {{ (in_array("Cerveja Grátis", $event->items)) ? "checked='checked' "  :  ' '  }}> Cerveja Grátis
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Open food" {{ (in_array("Open food", $event->items)) ? "checked='checked' "  :  ' '  }}> Open food
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Brindes" {{ (in_array("Brindes", $event->items)) ? "checked='checked' "  :  ' '  }}> Brindes
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" value="Editar Evento">
            </form>
        </div>
    @endsection