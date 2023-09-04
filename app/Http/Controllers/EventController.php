<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $search = request('search');

        if ($search) {

            $events = Notice::where([
                ['title', 'like', '%' . $search . '%']
            ])->get();
        } else {
            $events = Notice::all();
        }

        return view('events.eventos', ['events' => $events, 'search' => $search]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $event = new Notice;

        $event->title = $request->title;
        $event->date = $request->date;
        $event->description = $request->description;

        // Image Upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('assets/img/events'), $imageName);
            $event->image = $imageName;
        }

        $user = auth()->user();
        $event->user_id = $user->id;

        $event->save();
        return redirect('/dashboard')->with('msg', 'Evento criado com sucesso!');
    }
}