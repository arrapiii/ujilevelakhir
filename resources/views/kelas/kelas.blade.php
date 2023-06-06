@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        @if (auth()->user()->level=="Admin")
        <div class="card-header py-3">
            <a  type="button" class="btn btn-outline-primary" href="/inputkelas">+ TAMBAH DATA</a>
        </div>
        @endif
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kelas </th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Kelas</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data as $a)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $a->kelas_jurusan }}</td>
                                <td>
                                    <a href="/tampilkankelas/{{ $a->id }}" type="button" class="btn btn-warning">EDIT</a>
                                    <a href="/deletekelas/{{ $a->id }}" type="button" class="btn btn-danger">HAPUS</a>
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