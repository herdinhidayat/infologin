@extends('layouts.master')

@section('konten')
    <h1>Kegiatan Kami</h1>
    <hr>
    <button type="button" class="btn btn-primary mb-3">Tambah Kegiatan</button>
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