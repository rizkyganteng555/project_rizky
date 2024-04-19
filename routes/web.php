<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return '<h1>Halo</h1>';

});

// route basic
Route::get('/about', function () {
    return '<h1>Halo</h1>'
    .'selamat datang di webapp saya<br>' 
    .'laravel,emang keren';
});

// route basic passing data to view
Route::get('animals', function () {
    $king = "lion";
    $hewan = ["monkey","dragonfly","tiger","butterfly","crocodile"];
    return view ('animals_page',compact('king','hewan'));
});