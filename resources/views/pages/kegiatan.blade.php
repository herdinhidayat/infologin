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
      <th scope="col">Aksi Kegiatan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Berbagi Kepanti Asuhan</td>
      <td>Selengkapnya</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Berbagi Kepondok</td>
      <td>Selengkapnya</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Pelatihan Keterampilan</td>
      <td>Selengkapnya</td>
    </tr>
  </tbody>
</table>
@endsection