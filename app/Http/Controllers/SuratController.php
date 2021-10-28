<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratModel;

class SuratController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $surat=SuratModel::where('no_surat','LIKE','%'.$request->cari.'%')->get();
        }else{
            $surat=SuratModel::paginate(5);
        }
        
        return view ('surat.index',['surat'=>$surat]);
    }
    public function create(Request $request)
    {
        SuratModel::create($request->all());
        return redirect('/surat')->with('sukses','Data Berhasil Ditambahkan');
    }
    public function edit($id)
    {
        $surat=SuratModel::find($id);
        return view('surat.editsurat',['surat'=>$surat]);
    }
    public function update(Request $request,$id)
    {
        $surat=SuratModel::find($id);
        $surat->update($request->all());
        return redirect ('/surat')->with('sukses','Data Berhasil Diubah');
    }
    public function delete($id)
    {
        $surat=SuratModel::find($id);
        $surat->delete('surat');
        return redirect ('/surat')->with('sukses','Data Berhasil Dihapus');
    }
}
