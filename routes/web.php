<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Ivanna
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/shop', function(){
    return view('front.shop');
})->name('shop');

Route::get('/contact', function(){
    return view('front.contact');
})->name('contact');

//End Ivanna
//Start Dilane
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->name('dashboard');


//End Dilane
