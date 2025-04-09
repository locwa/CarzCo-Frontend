<?php

use Illuminate\Support\Facades\Route;
use App\Models\Fleet;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('/fleet', function () {;
    $disk = Storage::disk('gcs');
    return view('fleet', ['fleet_list' => Fleet::where('status', 0)->get(), 'disk' => $disk]);
})->name('fleet');

Route::get('/fleet/{id}', function ($id) {;
    return view('fleet', ['fleet_list' => Fleet::where('make', str_replace('-', ' ', $id))->get()]);
})->name('fleet.filter');

Route::get('/view-car/{id}', function ($id) {
    return view('view-car', ['car_details' => Fleet::where('id', $id)->get()]);
})->name('view-car');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
}) ->name('contact');
