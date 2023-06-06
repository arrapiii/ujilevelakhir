@extends('layouts.dashboard')
@section('content')
<div class="container mt-4">
    <form action="/updatekelas/{{ $data->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input value="{{ $data->kelas_jurusan }}" type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="kelas_jurusan">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

