<?php

namespace App\Http\Controllers;

use App\Models\usulaninovasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Stroage;

class usulaninovasiController extends Controller
{
    public function usulaninovasi(Request $request){
        $x = auth()->user()->name;
        if ($x == "admin") {
            $data = Usulaninovasi::orderBy('id','desc')->get();
            
        } else {
            $data = Usulaninovasi::where('namapanti', $x)->orderBy('id','desc')->get();
        }
        return view('usulaninovasi', compact('data'));
    }

    public function cetakinovasi(){
        $x = auth()->user()->name;
        if ($x == "admin") {
            $data = Usulaninovasi::orderBy('id','desc')->get();
            
        } else {
            $data = Usulaninovasi::where('namaunit', $x)->orderBy('id','desc')->get();
        }
        return view('cetakinovasi', compact('data'));
    }

    public function formusulaninovasi(){
        return view('formusulaninovasi');
    }


    // insert data
    public function insertdatainovasi(Request $request){
        $request->validate([
            'namapanti' => 'required',
            'paguanggaran' => 'required',
            'tahunpelaksanaan' => 'required',
            'latarbelakang' => 'required',
            'tujuan' => 'required',
            'deskripsiinovasi' => 'required',
            'tanggalusulan' => 'required',
            'statususulan' => 'required',
            'proposal' => 'required|file|mimes:pdf,doc,docx,xlsx|max:10048',
            'rab' => 'required|file|mimes:pdf,doc,docx,xlsx|max:10048',
            'catatankeuangan' => 'required|file|mimes:pdf,doc,docx,xlsx|max:10048',
        ]);
    
        // Simpan data ke dalam database
        $data = new usulaninovasi();
        $data->namapanti = $request->namapanti;
        $data->namainovasi = $request->namainovasi ?? ''; // Berikan nilai default jika tidak ada input
        $data->paguanggaran = $request->paguanggaran;
        $data->tahunpelaksanaan = $request->tahunpelaksanaan;
        $data->latarbelakang = $request->latarbelakang;
        $data->tujuan = $request->tujuan;
        $data->deskripsiinovasi = $request->deskripsiinovasi;
        $data->tanggalusulan = $request->tanggalusulan;
        $data->statususulan = $request->statususulan;

// Lanjutkan proses penyimpanan data...
   
        // Simpan file yang diunggah
        if ($request->hasFile('proposal')) {
            $proposalFile = $request->file('proposal');
            $proposalFilename = $proposalFile->getClientOriginalName();
            $proposalFile->move('assets', $proposalFilename);
            $data->proposal = $proposalFilename;
        }
    
        if ($request->hasFile('rab')) {
            $rabFile = $request->file('rab');
            $rabFilename = $rabFile->getClientOriginalName();
            $rabFile->move('assets', $rabFilename);
            $data->rab = $rabFilename;
        }
    
        if ($request->hasFile('catatankeuangan')) {
            $catatankeuanganFile = $request->file('catatankeuangan');
            $catatankeuanganFilename = $catatankeuanganFile->getClientOriginalName();
            $catatankeuanganFile->move('assets', $catatankeuanganFilename);
            $data->catatankeuangan = $catatankeuanganFilename;
        }
    
        $data->save();
    
        return redirect()->route('usulaninovasi')->with('success', 'Data Berhasil Ditambahkan');
    }
    // insert data end
    

    // download data
    public function downloaddoc4(Request $request, $file){
        return response()->download(public_path('assets/'.$file));
    }
    // download data end


    // delete data
    public function deletedatainovasi($id){
        $data = usulaninovasi::find($id);
        $data->delete();
        return redirect()->route('usulaninovasi')->with('success','Data Berhasil Di Delete');
    }
    // delete data end
}