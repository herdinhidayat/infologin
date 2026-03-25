<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    $biodata = [
        'nama' => 'Infologin',
        'Alamat Berau' => 'Jl. Merdeka No. 123, Berau, Kalimantan Timur',
        'NPWP' => '12134'
    ];
    return view('pages.about', $biodata);
});

Route::view('/contact', 'pages.contact');
