<?php

namespace App\Http\Controllers;

use App\Models\Tbdatamonitoring;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Stroage;

class TbdatamonitoringController extends Controller
{
    public function tbdatamonitoring(Request $request){
        if($request->has('search')){
            $data = Tbdatamonitoring::where('name', 'LIKE', '%' .$request->search.'%')->paginate(10);
        }else{
            $data = Tbdatamonitoring::paginate(10);
        }

        //$data = Tbdatamonitoring::paginate(3);
        return view('tbdatamonitoring', compact('data'));
    }

    public function formtbdatamonitoring(){
        return view('formtbdatamonitoring');
    }

    public function inserttbdatamonitoring(Request $request){
       //dd($request->all());
       $request->validate([
        'file' => 'required|file|mimes:pdf,doc,docx,xlsx|max:10048', // Sesuaikan dengan tipe file yang diizinkan dan ukurannya
        // Tambahkan validasi lainnya sesuai kebutuhan Anda
    ]);

    // Simpan data ke dalam database
    $data = new Tbdatamonitoring();
    $data->name = $request->name;

    // Simpan file yang diunggah
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $filename = $file->getClientOriginalName(); // Gunakan nama asli file
        $file->move('datamonitoring', $filename);
        $data->file = $filename;
    }

    $data->save();
    //return redirect()->back();
    return redirect()->route('tbdatamonitoring')->with('success','Data Berhasil Di Tambahkan');
}

    public function downloaddoc1(Request $request, $file){
        return response()->download(public_path('datamonitoring/'.$file));
    }

    public function deletetbdatamonitoring($id){
        $data = Tbdatamonitoring::find($id);
        $data->delete();
        return redirect()->route('tbdatamonitoring')->with('success','Data Berhasil Di Hapus');
    }
}
