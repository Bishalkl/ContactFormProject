<?php

use Illuminate\Support\Facades\Route;

// main page
Route::get('/', function () {
    return view('welcome');
});


// for test
Route::get('/test', function() {
    return "It is working";
});

// for test
Route::view('master', 'layouts.master');
