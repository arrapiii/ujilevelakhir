@extends('layouts.dashboard')
@section('content')
<div class="container mt-4">
    <form action="/updatesiswa/{{ $data->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input value="{{ $data->nama }}" type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama">
        </div>
        <div class="form-group">
            <label for="nip">NISN:</label>
            <input value="{{ $data->nisn }}" type="number" class="form-control" id="nip" placeholder="Masukkan NIP" name="nisn">
        </div>
        <div class="form-group">
            <label for="telepon">Tanggal Lahir:</label>
            <input value="{{ $data->tanggal_lahir }}" type="date" class="form-control" id="telepon" placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Jenis Kelamin</label>
            <select class="form-control" name="jeniskelamin" id="" required>
              <option hidden>{{ $data->jk }}</option>
              <option value="L">Laki-laki</option>
              <option value="P">Perempuan</option>
            </select>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

