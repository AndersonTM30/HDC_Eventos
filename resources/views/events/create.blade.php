@extends('layouts.main')
    @section('title', 'Criar Evento')

    @section('content') 
        <div id="event-create-container" class="col-md6 offset-md3">
            <h1>Crie o seu evento</h1>
            <form action="/events" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Imagem do Evento:</label>
                    <input type="file" name="image" placeholder="Imagem do evento" class="form-control-file" id="image">
                </div>
                <div class="form-group">
                    <label for="title">Evento:</label>
                    <input type="text" name="title" placeholder="Nome do evento" class="form-control" id="title">
                </div>
                <div class="form-group">
                    <label for="city">Cidade:</label>
                    <input type="text" name="city" placeholder="Local do evento" class="form-control" id="city">
                </div>
                <div class="form-group">
                    <label for="private">Evento:</label>
                    <select name="private" id="private" class="form-control">
                        <option value="0">Não</option>
                        <option value="1">Sim</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Evento:</label>
                    <textarea type="text" name="description" placeholder="Oque vai acontecer no evento" class="form-control" id="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="title">Adicione itens de infraestrutura:</label>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Palco"> Palco
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Cerveja Grátis"> Cerveja Grátis
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Open food"> Open food
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Brindes"> Brindes
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" value="Criar Evento">
            </form>
        </div>
    @endsection