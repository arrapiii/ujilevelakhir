<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function kelas() {
        $data = Kelas::all();
        return view('kelas.kelas', compact('data'));
    }

    public function inputkelas() {
        // $wal = Guru::all();
        return view('kelas.insertkelas');
    }

    public function insertkelas(Request $request) {
        Kelas::create($request->all()); 
        return redirect()->route('kelas')->with('success','Data Berhasil Di Tambahkan');
    }

    public function tampilkankelas($id) {
        // $wal = Guru::all();
        $data = Kelas::find($id);
        // dd($data);

        return view('kelas.updatekelas', compact('data'));

    }
    public function detailkelas($id) {
        
        $data = Kelas::find($id);
        // dd($data);

        return view('detailkelas', compact('data'));
    }

    public function updatekelas(Request $request, $id) {
        // $data = Siswa::with('relationsToPelanggaran', 'guru');
        $data = kelas::find($id);
        
        $data->update($request->all());
        return redirect()->route('kelas')->with('success','Data Berhasil Di Ubah'); 
    }

    public function deletekelas($id) {
        $data = Kelas::find($id);
        $data->delete();
        return redirect()->route('kelas')->with('success','Data Berhasil Di Hapus');
    }

}
