@extends('layouts.master')

@section('konten')
    <h1>Kegiatan Kami</h1>
    <hr>
    <a href="/kegiatan/tambah" type="button" class="btn btn-primary mb-3">Tambah Kegiatan</a>
    <div class="alert alert-primary" role="alert">
        <b>Nama Kegiatan: </b> {{ $data_kegiatan['nama_kegiatan'] }}
        <br>
        <b>Lokasi: </b> {{ $data_kegiatan['alamat'] }}
        <br>
        <b>Detail Kegiatan: </b> {{ $data_kegiatan['Detail_Kegiatan'] }}  
    </div>
    <div class="card-header">
        Daftar Kegiatan
    </div>

    <table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Kegiatan</th>
      <th scope="col">Tentang Kegiatan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Berbagi Kepanti Asuhan</td>
      <td>Selengkapnya</td>
      <td>
            <button type="button" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-warning">Edit</button>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Berbagi Kepanti Asuhan</td>
      <td>Selengkapnya</td>
      <td>
            <button type="button" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-warning">Edit</button>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Berbagi Kepanti Asuhan</td>
      <td>Selengkapnya</td>
      <td>
            <button type="button" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-warning">Edit</button>
    </tr>
  </tbody>
</table>
@endsection