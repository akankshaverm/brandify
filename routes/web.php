<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//return view('welcome');
//});

Route::get('/', function () {
   return view('home');
})->name('homepage');

Route::get('footer', function () {
   return view('footer');
})->name('footer');

Route::get('/about', function () {
   return view('about');
})->name('aboutpage');

Route::get('/intro', function () {
   return view('intro');
})->name('intropage');

Route::get('/our-founders', function () {
   return view('our-founders');
})->name('founders');

Route::get('/advisory-board', function () {
   return view('advisory-board');
})->name('advisory-board');

Route::get('/partner-with-us', function () {
   return view('partner-with-us');
})->name('partnership');

Route::get('/login', function () {
   return view('login');
})->name('login');
Route::get('/registration', function () {
   return view('registration');
})->name('registration');
Route::get('/register', function () {
   return view('register');
})->name('register');
