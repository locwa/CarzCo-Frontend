<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('/fleet', function () {
    return view('fleet');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('contact', function () {
    return view('contact');
});
