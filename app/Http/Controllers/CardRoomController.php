<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Hotel;

class CardRoomController extends Controller
{
    public function index()
    {

        $rooms = Room::all();
        $hotels = Hotel::all();

        return view('clients.rooms' , ['rooms'=>$rooms , 'hotels'=>$hotels  ]);
    }
}
