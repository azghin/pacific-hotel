<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;
use App\Models\Hotel;
use App\Models\User;
use App\Models\Booking;
use PDF;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        $rooms = Room::all();
        $hotels = Hotel::all();

        
        

        return view('clients.reservation' , ['user'=>$user , 'rooms'=>$rooms , 'hotels'=>$hotels ]);
    }

    public function store(Request $request)
    {
        $prefix = "PC-";
        $randomNumber = mt_rand(1000, 99999);
        $id_bkg = $prefix . $randomNumber;
        while (Booking::where('Booking_id', $prefix . $randomNumber)->exists()) {
            $randomNumber = mt_rand(1000, 99999);
        }

        $room = Room::find($request->room_type);

        $startDate = Carbon::parse($request->start_date);
        $endDate = Carbon::parse($request->end_date);

        $numberOfDays = $startDate->diffInDays($endDate);

        $price = $numberOfDays * $room->price_per_night ;

        $user = Auth::user();

        $book = new Booking;
        $book->Booking_id = $id_bkg;
        $book->room_id = $request->room_type;
        $book->client_id = Auth::user()->id;
        $book->start_date = $request->start_date;
        $book->end_date = $request->end_date;
        $book->total_price = $price;
        $book->save();

        $qrcode = QrCode::size(200)->generate($id_bkg);
        $qrcodeDataUri = 'data:image/png;base64,' . base64_encode($qrcode);
        
        
        $pdf = PDF::loadView('clients.pdf', ['user' => $user, 'room'=>$room->type ,'price'=>$price,'checkin'=>$request->start_date, 'checkout'=>$request->end_date ,'qrcodeDataUri' => $qrcodeDataUri]);  
        
        return $pdf->download($user->username . '.pdf');
    }

    
}
