<?php

use Illuminate\Support\Facades\Route;
use App\Models\Fleet;

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('/fleet', function () {;
    return view('fleet', ['fleet_list' => Fleet::where('status', 0)->get()]);
});

Route::get('/view-car/{id}', function ($id) {
    return view('view-car');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('contact', function () {
    return view('contact');
});
