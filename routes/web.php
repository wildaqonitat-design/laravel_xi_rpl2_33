<?php

//use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});



use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.index');
});

Route::get('/about', function () {
    return view('landing.about');
});