<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function index()
    {

        $hotels = Hotel::all();
        

        return view('clients.home' , ['hotels'=>$hotels ]);
    }
    public function indexAbout()
    {

        $hotels = Hotel::all();
        

        return view('clients.about_us' , ['hotels'=>$hotels ]);
    }
    public function indexContact()
    {

        $hotels = Hotel::all();
        

        return view('clients.contact' , ['hotels'=>$hotels ]);
    }
}
