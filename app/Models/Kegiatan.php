<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    // inisialisasi tabel produk
    protected $table = 'tb_kegiatan';
     // inisialisasi primary key
    protected $primaryKey = 'id_kegiatan';   
     // inisialisasi data yang dapat kita isi
    // protected $fillable = ['nama_kegiatan', 'alamat', 'detail_kegiatan'];
     // inisialisasi tabel data yang tidak boleh diisi
    protected $guarded = ['id_kegiatan'];
}
