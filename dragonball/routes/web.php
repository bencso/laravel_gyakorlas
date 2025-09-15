<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\BasicMiddleware;

Route::get('/', function () {
    return view('fooldal');
});

Route::get('/karakterek', function () {
    return view('karakterek');
});

Route::get('/bejelentkezes', function () {
    return view('authentikacio.bejelentkezes');
});


Route::get('/regisztracio', function () {
    return view('authentikacio.regisztracio');
});


Route::get('/csapat', function () {
    return view('karakterek');
})->middleware(BasicMiddleware::class);
