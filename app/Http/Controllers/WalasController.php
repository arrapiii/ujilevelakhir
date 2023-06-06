<?php

namespace App\Http\Controllers;

use App\Models\Walas;
use Illuminate\Http\Request;

class WalasController extends Controller
{

    public function walas() {

        $data = Walas::all();
        // dd($data);
        return view('walas.walas', compact('data'));
    }

    public function inputwalas() {
        return view('walas.insertwalas');
    }

    public function insertwalas(Request $request) {
        Walas::create($request->all()); 
        return redirect()->route('walas')->with('success','Data Berhasil Di Tambahkan');
    }

    public function tampilkanwalas($id) {
        
        $data = Walas::find($id);
        // dd($data);

        return view('walas.updatewalas', compact('data'));
    }

    public function updatewalas(Request $request, $id) {
        $data = Walas::find($id);
        $data->update($request->all());
        return redirect()->route('walas')->with('success','Data Berhasil Di Ubah'); 
    }

    public function deletewalas($id) {
        $data = Walas::find($id);
        $data->delete();
        return redirect()->route('walas')->with('success','Data Berhasil Di Hapus');
    }
}
    