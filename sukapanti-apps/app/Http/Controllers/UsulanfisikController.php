<?php

namespace App\Http\Controllers;

use App\Models\Usulanfisik;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Stroage;

class UsulanfisikController extends Controller
{
    public function usulanfisik(){
        $x = auth()->user()->name;
        if ($x == "admin") {
            $data = Usulanfisik::orderBy('id','desc')->get();
            
        } else {
            $data = Usulanfisik::where('namaunit', $x)->get();
        }
        return view('usulanfisik', compact('data'));
    }

    public function cetakrehabfisik(){
        $x = auth()->user()->name;
        if ($x == "admin") {
            $data = Usulanfisik::orderBy('id','desc')->get();
            
        } else {
            $data = Usulanfisik::where('namaunit', $x)->orderBy('id','desc')->get();
        }
        return view('cetakrehabfisik', compact('data'));
    }

    public function formusulanfisik(){
        return view('formusulanfisik');
    }

    // insert data
    public function insertdatafisik(Request $request){
        //dd($request->all());
        $request->validate([
            'file' => 'required|file|mimes:pdf,doc,docx,xlsx|max:10048', // Sesuaikan dengan tipe file yang diizinkan dan ukurannya
            // Tambahkan validasi lainnya sesuai kebutuhan Anda
        ]);
    
        // Simpan data ke dalam database
        $data = new Usulanfisik();
        $data->namaunit = $request->namaunit;
        $data->usulanrehab = $request->usulanrehab;
        $data->volume = $request->volume;
    
        // Simpan file yang diunggah
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName(); // Gunakan nama asli file
            $file->move('assets', $filename);
            $data->file = $filename;
        }
    
        $data->save();
    
        return redirect()->route('usulanfisik')->with('success', 'Data Berhasil Ditambahkan');
    }
    // insert data end


    // download data
    public function download(Request $request, $file){
        return response()->download(public_path('assets/'.$file));
    }
    // download data end


    // delete data
    public function deletedatafisik($id){
        $data = Usulanfisik::find($id);
        $data->delete();
        return redirect()->route('usulanfisik')->with('success','Data Berhasil Di Hapus');
    }
    // delete data end
}
