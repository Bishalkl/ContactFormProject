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

// get routes for contact-form
Route::get('/contact-form', [ContactFormController::class, 'index'])->name('contact.index');

// post routes for contact-form
Route::post('/contact-form', [ContactFormController::class, 'store'])->name('contact.store');

// view routes
Route::view('/about-us', 'aboutus')->name('aboutUs');
Route::view('/profileDashbaord', 'profile')->name('profile.dashboard');
