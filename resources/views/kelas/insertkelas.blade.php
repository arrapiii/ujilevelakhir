@extends('layouts.dashboard')
@section('content')
<div class="container mt-4">
    <form action="/insertkelas" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama">Kelas:</label>
            <input type="text" class="form-control" id="kelas" placeholder="Masukkan kelas" name="kelas_jurusan">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

