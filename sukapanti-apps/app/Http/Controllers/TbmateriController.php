<?php

namespace App\Http\Controllers;

use App\Models\Tbmateri;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Stroage;

class TbmateriController extends Controller
{
    public function tbmateri(Request $request){
        if($request->has('search')){
            $data = Tbmateri::where('name', 'LIKE', '%' .$request->search.'%')->paginate(10);
        }else{
            $data = Tbmateri::paginate(10);
        }

        //$data = tbmateri::paginate(3);
        return view('tbmateri', compact('data'));
    }

    public function formtbmateri(){
        return view('formtbmateri');
    }

    public function inserttbmateri(Request $request){
        //dd($request->all());
        $request->validate([
            'file' => 'required|file|mimes:pdf,doc,docx,xlsx|max:10048', // Sesuaikan dengan tipe file yang diizinkan dan ukurannya
            // Tambahkan validasi lainnya sesuai kebutuhan Anda
        ]);
    
        // Simpan data ke dalam database
        $data = new Tbmateri();
        $data->name = $request->name;
    
        // Simpan file yang diunggah
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName(); // Gunakan nama asli file
            $file->move('materi', $filename);
            $data->file = $filename;
        }

        $data->save();
        //return redirect()->back();
        return redirect()->route('tbmateri')->with('success','Data Berhasil Di Tambahkan');
    }

    public function downloaddoc3(Request $request, $file){
        return response()->download(public_path('materi/'.$file));
    }

    public function deletetbmateri($id){
        $data = Tbmateri::find($id);
        $data->delete();
        return redirect()->route('tbmateri')->with('success','Data Berhasil Di Hapus');
    }
}
