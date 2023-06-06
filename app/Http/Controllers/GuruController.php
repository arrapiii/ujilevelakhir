<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function guru() {

        $data = Guru::all();
        // dd($data);
        return view('dashboard.dashboardd', compact('data'));
    }

    public function formguru() {
        return view('dashboard.formguru');
    }

    public function insertguru(Request $request) {
        Guru::create($request->all());
        return redirect()->route('guru')->with('success','Data Berhasil Di Tambahkan');
    }

    public function tampilkanguru($id) {
        
        $data = Guru::find($id);
        // dd($data);

        return view('dashboard.editguru', compact('data'));
    }

    public function updateguru(Request $request, $id) {
        $data = Guru::find($id);
        $data->update($request->all());
        return redirect()->route('guru')->with('success','Data Berhasil Di Ubah'); 
    }

    public function deleteguru($id) {
        $data = Guru::find($id);
        $data->delete();
        return redirect()->route('guru')->with('success','Data Berhasil Di Hapus');
    }
}
