<?php

namespace App\Http\Controllers;

use App\Models\Usulanbelanjamodal;
use Illuminate\Http\Request;

class UsulanbelanjamodalController extends Controller
{
    public function usulanbelanjamodal(){
        $x = auth()->user()->name;
        if ($x == "admin") {
            $data = Usulanbelanjamodal::orderBy('id','desc')->get();
            
        } else {
            $data = Usulanbelanjamodal::where('namaunit', $x)->orderBy('id','desc')->get();
        }
        return view('usulanbelanjamodal', compact('data'));
    }

    public function cetakbelanjamodal(){
        $x = auth()->user()->name;
        if ($x == "admin") {
            $data = Usulanbelanjamodal::orderBy('id','desc')->get();
            
        } else {
            $data = Usulanbelanjamodal::where('namaunit', $x)->orderBy('id','desc')->get();
        }
        return view('cetakbelanjamodal', compact('data'));
    }

    public function formusulanbelanjamodal(){
        return view('formusulanbelanjamodal');
    }

    public function insertdatabelanjamodal(Request $request){
        $request->validate([
            'namaunit' => 'required',
            'usulan' => 'required',
            'volume' => 'required',
            'peruntukan' => 'required',
        ]);
        Usulanbelanjamodal::create($request->all());
        return redirect()->route('usulanbelanjamodal')->with('success','Data Berhasil Di Tambahkan');
    }

    public function deletedatabelanjamodal($id){
        $data = Usulanbelanjamodal::find($id);
        $data->delete();
        return redirect()->route('usulanbelanjamodal')->with('success','Data Berhasil di Hapus');
    }
}
