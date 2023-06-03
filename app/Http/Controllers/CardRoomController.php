<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class CardRoomController extends Controller
{
    public function index()
    {

        $rooms = Room::all();

        return view('clients.rooms' , ['rooms'=>$rooms ]);
    }
}
