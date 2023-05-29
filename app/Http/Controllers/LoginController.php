<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        $email = $request->email;
        $password = $request->password;

        $credentials = ['email' => $email , "password" => $password];

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            
            if(Auth::user()->user_type == 'admin'){
                return redirect('/admin/dashboard');
            }else{
                return redirect('/client/home');
            }

            return redirect('/client/home');
        }else{
            return back()->withErrors([
                'email'=> 'Email ou mot de passe incorrect.'
            ]);

        };

        
    }
}
