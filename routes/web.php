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

Route::get('/partner-with-us', function(){
   return view('partner-with-us');
})->name('partnership');

Route::get('/network-distribution', function(){
   return view('network-distribution');
})->name('network-distribution');

Route::get('/case-study', function(){
   return view('case-study');
})->name('case-study');

Route::get('/faq', function(){
   return view('faq');
})->name('faq');

Route::get('/contactUs', function(){
   return view('contactUs');
})->name('contactUs');






