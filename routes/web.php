<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KegiatanController;

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

// satu controller untuk satu kegiatan  
Route::get('/kegiatan',[KegiatanController::class, 'getKegiatan']);
Route::get('/kegiatan/tambah',[KegiatanController::class, 'tambahKegiatan']);