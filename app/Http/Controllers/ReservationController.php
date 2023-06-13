<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class ReservationController extends Controller
{
    public function index()
    {

        $Bookings = Booking::all();

        
        

        return view('admin.reservation' , ['Bookings'=>$Bookings ]);
    }
}
