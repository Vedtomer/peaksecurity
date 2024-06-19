<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/about-us', function () {
    return view('about');
});


