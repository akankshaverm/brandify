<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/', function () {
    return view('home');
})->name('homepage');

Route::get('footer',function(){
    return view('footer');
})->name('footer');



