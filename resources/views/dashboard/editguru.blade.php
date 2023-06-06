@extends('layouts.dashboard')
@section('content')
<div class="container mt-4">
    <form action="/updateguru/{{ $data->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input value="{{ $data->nama }}" type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama">
        </div>
        <div class="form-group">
            <label for="nip">NIP:</label>
            <input value="{{ $data->nip }}" type="number" class="form-control" id="nip" placeholder="Masukkan NIP" name="nip">
        </div>
        <div class="form-group">
            <label for="telepon">Nomor Telepon:</label>
            <input value="{{ $data->notelp }}" type="number" class="form-control" id="telepon" placeholder="Masukkan nomor telepon" name="notelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

