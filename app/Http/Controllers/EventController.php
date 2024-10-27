<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
//use Illuminate\Support\Facades\DB;
class EventController extends Controller
{
    public function index()
    {

        $search = request('search');
        if ($search) {
            $events = Event::where([
                ['title', 'like', '%' . $search . '%']
            ])->get();
        } else {
            $events = Event::all();
        }


        return view('welcome', ['events' => $events, 'search' => $search]);
    }

    public function criarpersonagem()
    { //projjetointegrador
        return view('events.criarpersonagem');
    }



    public function meuspersonagens()
    { //projetointegrador
        $user = auth()->user();

        $events = $user->events;

        $eventsAsParticipant = $user->eventsAsParticipant;

        return view('events.meuspersonagens', ['events' => $events, 'eventsasparticipant' => $eventsAsParticipant]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $event = new Event;

        //Atributos
        $event->nome_personagem = $request->nome_personagem;
        $event->nome_jogador = $request->nome_jogador;

        $event->agi = $request->agi;
        $event->int = $request->int;
        $event->vig = $request->vig;
        $event->pre = $request->pre;
        $event->for = $request->for;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/events'), $imageName);
            $event->image = $imageName;
        }

        $event->lore = $request->lore;

        $event->origem = $request->origem;

        $event->classe = $request->classe ;

        $event->nex= $request->nex;
        $event->maxpe = $request->maxpe;
        $event->desl = $request->desl;

        $event->pv = $request->pv;
        $event->pe = $request->pe;

        $event->def = $request->def;
        $event->san = $request->san;

        $event->prot = $request->prot;

        $event->res = $request->res ;

        //Atributos Atuais (Disponiveis Somente Apos A Criação da Ficha)
        $event->pvatual = $request->pv;
        $event->peatual = $request->pe;
        $event->sanatual = $request->san;
        //Pericias
        $event->pericias = $request->pericias;

        //Ataques
        $event->dt = $request->dt;
        $event->ataques = $request->ataques;

        //Inventario
        $event->espacos = $request->espacos;
        $event->inv = $request->inv;
        $user = auth()->user();
        $event->user_id = $user->id;

        $event->save();

        return redirect('/meuspersonagens')->with('msg', $event->nome_personagem . ' Criado com Sucesso!');
    }



    public function show($id)
    {
        $event = Event::findOrFail($id);

        $user = auth()->user();
        $hasUserJoined = false;

        if ($user) {

            $userEvents = $user->eventsAsParticipant->toArray();

            foreach ($userEvents as $userEvent) {
                if ($userEvent['id'] == $id) {
                    $hasUserJoined = true;
                }
            }
        }

        $eventOwner = User::where('id', $event->user_id)->first()->toArray();


        return view('events.show', ['event' => $event, 'eventOwner' => $eventOwner, 'hasUserJoined' => $hasUserJoined]);
    }

    public function dashboard()
    {
        $user = auth()->user();

        $events = $user->events;

        $eventsAsParticipant = $user->eventsAsParticipant;

        return view('events.meuspersonagens', ['events' => $events, 'eventsasparticipant' => $eventsAsParticipant]);
    }

    public function library()
    {
        $user = auth()->user();

        $events = $user->events;

        $eventsAsParticipant = $user->eventsAsParticipant;

        return view('events.library', ['events' => $events, 'eventsasparticipant' => $eventsAsParticipant]);
    }


    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect('/dashboard')->with('msg', $event->title . ' Excluído com sucesso!');
    }

    public function edit($id)
    {
        $user = auth()->user();

        $event = Event::findOrFail($id);

        if ($user->id != $event->user->id) {
            return redirect('/edit/{$id}');
        }

        return view('events.edit', ['event' => $event]);
    }

    public function update(Request $request, $id)
    {
        //certo

        $data = $request->all();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/events'), $imageName);
            $data['image'] = $imageName;
        }

        $event = Event::findOrFail($request->id);

        $event->update($data);

        return redirect('events/edit'.'/'.$id)->with('msg', $event->nome_personagem . ' Salvo com sucesso!');
    }

    /*public function joinEvent($id)
    {
        $user = auth()->user();
        $user->eventsAsParticipant()->attach($id);
        $event = Event::findOrFail($id);
        return redirect('/library')->with('msg', $event->title . ' foi adicionado a sua Biblioteca!');
    }

    public function leaveEvent($id)
    {

        $user = auth()->user();

        $user->eventsAsParticipant()->detach($id);

        $event = Event::findOrFail($id);

        return redirect('/library')->with('msg', $event->title . ' foi removido da sua Biblioteca!');
    }*/
}
