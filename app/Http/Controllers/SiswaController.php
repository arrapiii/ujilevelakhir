<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function siswa() {
        $data = Siswa::all();
        return view('siswa.siswa', compact('data'));
    }

    public function inpsiswa() {
        // $wal = Guru::all();
        return view('siswa.insertsiswa');
    }

    public function insertsiswa(Request $request) {
        Siswa::create($request->all()); 
        return redirect()->route('siswa')->with('success','Data Berhasil Di Tambahkan');
    }

    public function tampilkansiswa($id) {
        // $wal = Guru::all();
        $data = Siswa::find($id);
        // dd($data);

        return view('siswa.updatesiswa', compact('data'));

    }
    public function detailsiswa($id) {
        
        $data = Siswa::find($id);
        // dd($data);

        return view('detailsiswa', compact('data'));
    }

    public function updatesiswa(Request $request, $id) {
        // $data = Siswa::with('relationsToPelanggaran', 'guru');
        $data = Siswa::find($id);
        
        $data->update($request->all());
        return redirect()->route('siswa')->with('success','Data Berhasil Di Ubah'); 
    }

    public function deletesiswa($id) {
        $data = Siswa::find($id);
        $data->delete();
        return redirect()->route('siswa')->with('success','Data Berhasil Di Hapus');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}
