<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    public function show()
    {
        $rooms = Room::all();

        return view('/main/labo', compact('rooms'));
    }

    public function posts(Request $request)
    {            
        $rooms = new Room;

        $rooms->name = $request->name;
        $rooms->text = $request->text;

        $rooms->save();

        return redirect()->route('RoomShow');
    }

    public function create($id)
    {
        $room = Room::find($id);

        return view('/layouts/option', compact('room'));
    }
}
