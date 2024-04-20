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

Route::get('/halaman2', function () {
    return view('animals');
});

Route::get('/halaman3', function () {
    return view('fruits');
});

Route::get('/about', function () {
    $nama = "Rizky muhammad R";
    $jenis = "laki laki";
    $pendidikan = "SMK";
    $pekerjaan = "pelajar";

    return view('biodata', compact('nama', 'jenis', 'pendidikan', 'pekerjaan'));

});

// parameter
Route::get('/sample/{nama}', function (Request $request, $nama) {
    $nama2 = $nama;
    return view('sample',compact('nama2'));
});
