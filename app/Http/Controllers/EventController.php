<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Notice::where([
            ['type', 'like', 'event']
        ])->orderBy('date', 'desc')->get();

        return view('events.eventos', ['events' => $events]);
    }

    public function index_eco()
    {
        $events = Notice::where([
            ['type', 'like', 'eco']
        ])->get();

        return view('projects.eco', ['events' => $events]);
    }

    public function index_acat()
    {
        $events = Notice::where([
            ['type', 'like', 'acat']
        ])->get();

        return view('projects.acat', ['events' => $events]);
    }


    public function create()
    {
        return view('events.create');
    }

    public function create_eco()
    {
        return view('events.create_eco');
    }

    public function create_acat()
    {
        return view('events.create_acat');
    }

    public function store(Request $request)
    {
        $event = new Notice;
        $user = auth()->user();

        $event->title = $request->title;
        $event->type = $request->type;
        if (!empty($request->date)) {
            $event->date = $request->date;
        } else {
            $event->date = date("Y-m-d H:i:s");
        }
        $event->description = $request->description || "";
        $event->user_id = $user->id;

        // Image Upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('assets/img'), $imageName);
            $event->image = $imageName;
        }

        $event->save();
        return redirect('/dashboard');
    }
}