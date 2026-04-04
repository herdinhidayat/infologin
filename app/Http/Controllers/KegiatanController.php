<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function getKegiatan() {
        $data_kegiatan = [
            'nama_kegiatan' =>'berbagi ke pesantren',
            'alamat' => 'Pesantren Al-Hikmah, Jl. Merdeka No. 123, Berau, Kalimantan Timur',
            'Detail_Kegiatan' => 'berbagi sembako, pakaian layak pakai, dan perlengkapan sekolah kepada santri di pesantren Al-Hikmah untuk mendukung pendidikan mereka.'
        ];
        return view('pages.kegiatan', compact('data_kegiatan'));
    }

    public function tambahKegiatan()
    {
        return view('pages.addKegiatan');
    }

}
