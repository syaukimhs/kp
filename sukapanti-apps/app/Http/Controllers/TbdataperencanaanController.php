<?php

namespace App\Http\Controllers;

use App\Models\Tbdataperencanaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Stroage;

class TbdataperencanaanController extends Controller
{
    public function tbdataperencanaan(Request $request){
        if($request->has('search')){
            $data = Tbdataperencanaan::where('name', 'LIKE', '%' .$request->search.'%')->paginate(10);
        }else{
            $data = Tbdataperencanaan::paginate(10);
        }

        //$data = Tbdatamonitoring::paginate(3);
        return view('tbdataperencanaan', compact('data'));
    }

    public function formtbdataperencanaan(){
        return view('formtbdataperencanaan');
    }

    public function inserttbdataperencanaan(Request $request){
        //dd($request->all());
        $request->validate([
            'file' => 'required|file|mimes:pdf,doc,docx,xlsx|max:10048', // Sesuaikan dengan tipe file yang diizinkan dan ukurannya
            // Tambahkan validasi lainnya sesuai kebutuhan Anda
        ]);
    
        // Simpan data ke dalam database
        $data = new Tbdataperencanaan();
        $data->name = $request->name;
    
        // Simpan file yang diunggah
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName(); // Gunakan nama asli file
            $file->move('dataperencanaan', $filename);
            $data->file = $filename;
        }

        $data->save();
        //return redirect()->back();
        return redirect()->route('tbdataperencanaan')->with('success','Data Berhasil Di Tambahkan');
    }

    public function downloaddoc(Request $request, $file){
        return response()->download(public_path('dataperencanaan/'.$file));
    }

    public function deletetbdataperencanaan($id){
        $data = Tbdataperencanaan::find($id);
        $data->delete();
        return redirect()->route('tbdataperencanaan')->with('success','Data Berhasil Di Hapus');
    }
}
