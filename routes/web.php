<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    $Nama = "Overflow VisPro";
    return view('about', [
        "Nama" => 'Overflow VisPro',
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog', function () {
    return view('blog');
});
