<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();// retorna todos os eventos do Model

        return view('welcome', ['events' => $events]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $event = new Event;
        // pega os parâmetros da requisição
        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        // Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {//verifica se a imagem é um arquivo válido
            $requestImagem = $request->image;

            $extension = $requestImagem->extension();

            $imageName = md5($requestImagem->getClientOriginalName() . strtotime('now')) . '.' . $extension;//gera um nome único para o arquivo

            $request->image->move(public_path('img/events'), $imageName);//move o arquivo importado para a pasta de events

            $event->image = $imageName;
        }

        $event->save();//salva no banco de dados

        return redirect('/')->with('msg', 'Evento criado com sucesso!');//redireciona para a home
        
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);

        return view('events.show', ['event' => $event]);
    }
}
