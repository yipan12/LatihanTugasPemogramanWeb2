@extends('layout.main')

@section('container')
<h1>Tambah Data</h1>
  <div class="mb-3">
      <label for="nama" class="form-label">Nama: </label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama">
    </div>
    <div class="mb-3">
      <label for="alamat" class="form-label">Alamat:</label>
      <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
    </div>

@endsection