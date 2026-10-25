<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $Nama = "Christian Farrel Tanmel";
    return view('home', [
        "Nama" => $Nama,
    ]);
});

Route::get('/about', function () {
    $Nama = "Christian Farrel Tanmel";
    return view('about', [
        "Nama" => $Nama,
    ]);
});

Route::get('/contact', function () {
    $Nama = "Christian Farrel Tanmel";
    return view('contact', [
        "Nama" => $Nama,
    ]);
});

Route::post('/contact', function () {
    $validated = request()->validate([
        'nama'  => 'required|string|max:100',
        'email' => 'required|email|max:255',
        'pesan' => 'required|string|max:2000',
    ]);

    $Nama  = $validated['nama'];
    $Email = $validated['email'];
    $Pesan = $validated['Pesan'] ?? $validated['pesan'];

    return view('contact', compact('Nama', 'Email', 'Pesan'));
});

Route::get('/blog', function () {
    $Nama = "Christian Farrel Tanmel";
    return view('blog', [
        "Nama" => $Nama,
    ]);
});
