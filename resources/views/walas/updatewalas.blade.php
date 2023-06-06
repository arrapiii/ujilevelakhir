@extends('layouts.dashboard')
@section('content')
<div class="container mt-4">
    <form action="/updatewalas/{{ $data->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama">NIP:</label>
            <input value="{{ $data->nip }}" type="number" class="form-control" id="nip" placeholder="Masukkan NIP" name="nip">
        </div>
        <div class="form-group">
            <label for="nip">Nama:</label>
            <input value="{{ $data->nama }}" type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

