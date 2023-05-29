<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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

Route::group(['prefix' => 'client','as'=>'client.','middleware'=> 'isClient'],function () {
    Route::view('home', 'clients.home')->name('home');
    Route::view('rooms', 'clients.rooms')->name('rooms');
    Route::view('about', 'clients.about_us')->name('about');
    Route::view('contact', 'clients.contact')->name('contact');
    Route::view('reservation', 'clients.reservation')->name('reservation');
    
});

Route::group(['prefix' => 'admin','as'=>'admin.','middleware'=>['auth','isAdmin']],function () {
    Route::view('dashboard', 'admin.dashboard')->name('dashboard');
    Route::view('users', 'admin.users')->name('users');
    
});

Route::view('master', 'layouts.master');
Route::view('/', 'login')->name('login');
Route::post('/login', [LoginController::class , 'login']);
Route::post('/createUser', [UserController::class , 'store']);




Route::fallback(
    function () {
        return view('page404');
    }
);