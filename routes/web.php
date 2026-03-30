<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about',  [
        'nama' => 'Infologin',
        'Alamat Berau' => 'Jl. Merdeka No. 123, Berau, Kalimantan Timur',
        'NPWP' => '12134'
    ]);
});


Route::view('/contact', 'pages.contact');
Route::view('/kegiatan', 'pages.kegiatan');