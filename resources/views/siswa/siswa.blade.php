@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        @if (auth()->user()->level=="Admin")
        <div class="card-header py-3">
            <a  type="button" class="btn btn-outline-primary" href="/inputsiswa">+ TAMBAH DATA</a>
        </div>
        @endif
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NISN</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NISN</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data as $a)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $a->nama }}</td>
                                <td>{{ $a->nisn }}</td>
                                <td>{{ $a->tanggal_lahir }}</td>
                                <td>{{ $a->jk }}</td>
                                <td>
                                    <a href="/tampilkansiswa/{{ $a->id }}" type="button" class="btn btn-warning">EDIT</a>
                                    <a href="/deletesiswa/{{ $a->id }}" type="button" class="btn btn-danger">HAPUS</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
@endsection