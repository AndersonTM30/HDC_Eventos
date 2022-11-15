<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{
    public function index()
    {
        $search = request('search');

        if($search) {//implementação da busca pelo título
            $events = Event::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();
        } else {

            $events = Event::all();// retorna todos os eventos do Model
        }

        return view('welcome', ['events' => $events, 'search' => $search]);
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
        $event->date = $request->date;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;
       
        // Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {//verifica se a imagem é um arquivo válido
            $requestImagem = $request->image;
            
            $extension = $requestImagem->extension();
            
            $imageName = md5($requestImagem->getClientOriginalName() . strtotime('now')) . '.' . $extension;//gera um nome único para o arquivo
            
            $request->image->move(public_path('img/events'), $imageName);//move o arquivo importado para a pasta de events

            $user = auth()->user();//pega o usuário logado
            $event->user_id = $user->id;//verifica se o usuário logado é o mesmo que vai cadastrar o evento

            $event->image = $imageName;
        }

        $event->save();//salva no banco de dados

        return redirect('/')->with('msg', 'Evento criado com sucesso!');//redireciona para a home
        
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);

        $eventOwner = User::where('id', $event->user_id)->first()->toArray();//filtra pelo id do usuário

        return view('events.show', ['event' => $event, 'eventOwner' => $eventOwner]);
    }

    public function dashboard()
    {
        $user = auth()->user();

        $events = $user->events;

        return view('events.dashboard', ['events' => $events]);
    }

    public function destroy($id)
    {
        Event::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Evento excluído com sucesso!');
    }
}
