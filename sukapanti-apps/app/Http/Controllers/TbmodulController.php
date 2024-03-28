<?php

namespace App\Http\Controllers;

use App\Models\Tbmodul;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Stroage;

class TbmodulController extends Controller
{
    public function tbmodul(Request $request){
        if($request->has('search')){
            $data = Tbmodul::where('name', 'LIKE', '%' .$request->search.'%')->paginate(10);
        }else{
            $data = Tbmodul::paginate(10);
        }

        //$data = tbmodul::paginate(3);
        return view('tbmodul', compact('data'));
    }

    public function formtbmodul(){
        return view('formtbmodul');
    }

    public function inserttbmodul(Request $request){
        //dd($request->all());
        $request->validate([
            'file' => 'required|file|mimes:pdf,doc,docx,xlsx|max:10048', // Sesuaikan dengan tipe file yang diizinkan dan ukurannya
            // Tambahkan validasi lainnya sesuai kebutuhan Anda
        ]);
    
        // Simpan data ke dalam database
        $data = new Tbmodul();
        $data->name = $request->name;
    
        // Simpan file yang diunggah
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName(); // Gunakan nama asli file
            $file->move('modul', $filename);
            $data->file = $filename;
        }

        $data->save();
        //return redirect()->back();
        return redirect()->route('tbmodul')->with('success','Data Berhasil Di Tambahkan');
    }

    public function downloaddoc2(Request $request, $file){
        return response()->download(public_path('modul/'.$file));
    }

    public function deletetbmodul($id){
        $data = Tbmodul::find($id);
        $data->delete();
        return redirect()->route('tbmodul')->with('success','Data Berhasil Di Hapus');
    }
}
