<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;

// main page
Route::get('/', function () {
    return view('welcome');
})->name('home');


// for test
Route::get('/test', function() {
    return "It is working";
})->name('test');

// index and routes
Route::get('/contact-form', [ContactFormController::class, 'index'])->name('contactform');

// view routes
Route::view('/about-us', 'aboutus')->name('aboutUs');
