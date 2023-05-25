<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'client','as'=>'client.'],function () {
    Route::view('home', 'clients.home')->name('home');
    Route::view('rooms', 'clients.rooms')->name('rooms');
    Route::view('about', 'clients.about_us')->name('about');
    Route::view('contact', 'clients.contact')->name('contact');
    Route::view('reservation', 'clients.reservation')->name('reservation');
    
});

Route::view('master', 'layouts.master');