<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Hotel;


class RoomController extends Controller
{
    public function index()
    {

        $rooms = Room::all();
        
        

        return view('admin.rooms' , ['rooms'=>$rooms  ]);
    }

    public function create()
    {
        $hotels = Hotel::all();

        return view('admin.newroom' , ['hotels'=>$hotels ]);

    }
    public function store(Request $request)
    {

        $image = $request->file('photo');
        $fileName = time().'.'.$image->getClientOriginalExtension();
        $image->storeAs('public/images', $fileName);

        

        $room = new Room;
        $room->room_number = $request->input('room_number');
        $room->image = $fileName; // Store the filename, not the request object
        $room->type = $request->input('type');
        $room->hotel_id = $request->input('hotel');
        $room->capacity = $request->input('capacity');
        $room->price_per_night = $request->input('price');
        $room->save();
        

        return redirect()->route('admin.rooms');
    }
}
