@extends('layouts.dashboard')
@section('content')
<div class="container mt-4">
    <form action="/insertsiswa" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama">
        </div>
        <div class="form-group">
            <label for="nip">nisn   :</label>
            <input type="number" class="form-control" id="nisn" placeholder="Masukkan NIP" name="nisn">
        </div>
        <div class="form-group">
            <label for="telepon">Tanggal lahir:</label>
            <input type="date" class="form-control" id="tanggal_lahir" placeholder="Masukkan nomor telepon" name="tanggal_lahir">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Jenis Kelamin</label>
            <select class="form-control" name="jk" id="" required>
              <option hidden>Jenis kelamin</option>
              <option value="L">Laki-laki</option>
              <option value="P">Perempuan</option>
            </select>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

