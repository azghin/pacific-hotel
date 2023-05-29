<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'digits:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required']
        ]);
        
        $user = new User;
        $user->username = $request->name;
        $user->phone_number = $request->phone;
        $user->email = $request->email;
        $user->password = hash::make($request->password);
        $user->save();

        return redirect()->route('client/home');
        
    }
        
   
}
