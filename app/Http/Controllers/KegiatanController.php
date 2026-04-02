<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function getKegiatan()
    {
        return view('pages.kegiatan');
    }

    public function tambahKegiatan()
    {
        return view('pages.addKegiatan');
    }

}