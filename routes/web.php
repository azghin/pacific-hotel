<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CardRoomController;
use App\Http\Controllers\RoomController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'clients.home')->name('home');

Route::group(['prefix' => 'client','as'=>'client.','middleware'=>['auth','isClient']],function () { 
    Route::get('rooms' , [CardRoomController::class , 'index'])->name('rooms');
    Route::view('about', 'clients.about_us')->name('about');
    Route::view('contact', 'clients.contact')->name('contact');
    Route::view('reservation', 'clients.reservation')->name('reservation');
    
});

Route::group(['prefix' => 'admin','as'=>'admin.','middleware'=>['auth','isAdmin']],function () {
    Route::view('dashboard', 'admin.dashboard')->name('dashboard');
    Route::view('users', 'admin.users')->name('users');
    Route::view('profil', 'admin.profil')->name('profil');
    Route::view('reservation', 'admin.reservation')->name('reservation');
    Route::view('review', 'admin.review')->name('review');
    Route::get('rooms', [RoomController::class , 'index'])->name('rooms');
    Route::get('newroom', [RoomController::class , 'create'])->name('newroom');
    Route::post('addnewroom', [RoomController::class , 'store'])->name('addnewroom');
    
});

Route::group(['middleware' => ['guest']], function () {
    Route::view('/showlogin', 'login')->name('login');
    Route::post('/login', [LoginController::class , 'login']);
    Route::get('/logout', [LoginController::class , 'logout'])->name('logout')->withoutMiddleware('guest');
    Route::post('/createUser', [UserController::class , 'store']);
});


Route::view('master', 'layouts.master');



Route::fallback(
    function () {
        return view('page404');
    }
);
