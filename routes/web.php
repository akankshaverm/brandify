<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/', function () {
    return view('home');
})->name('homepage');

 Route::get('/about', function(){
    return view('about');
 })->name('aboutpage');

 Route::get('/intro', function(){
    return view('intro');
 })->name('intropage');

 Route::get('/our-founders', function(){
    return view('our-founders');
 })->name('founders');

 Route::get('/advisory-board', function(){
   return view('advisory-board');
})->name('advisory-board');




