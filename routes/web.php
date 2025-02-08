<?php

use Illuminate\Support\Facades\Route;
use App\Models\Fleet;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('/fleet', function () {;
    return view('fleet', ['fleet_list' => Fleet::where('status', 0)->get()]);
})->name('fleet');

Route::get('/view-car/{id}', function ($id) {
    return view('view-car', ['car_details' => Fleet::where('id', $id)->get()]);
});

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
}) ->name('contact');
