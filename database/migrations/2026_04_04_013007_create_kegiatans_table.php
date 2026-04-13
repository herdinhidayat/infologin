<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // sintaks dibawah untuk membuat tabel kegiatan
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id('id_kegiatan');  //default kegiatan
            $table->string('nama_kegiatan');  //default kegiatan
            $table->string('lokasi_kegiatan');  //default kegiatan
            $table->string('keterangan_kegiatan');  //default kegiatan
            $table->integer('kategori_id');  //default kegiatan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatans');
    }
};
