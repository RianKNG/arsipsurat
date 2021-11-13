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
        // dd($request->all());
        $surat=SuratModel::find($id);
        $surat->update($request->all());
        if($request->hasfile('foto','pdf')){
            $request->file('foto','pdf')->move('images',$request->file('foto','pdf')->getClientOriginalName());
            $surat->foto = $request->file('foto')->getClientOriginalName();
          
            $surat->save();
        }

        return redirect ('/surat')->with('sukses','Data Berhasil Diubah');
    }
    public function delete($id)
    {
        $surat=SuratModel::find($id);
        $surat->delete('surat');
        return redirect ('/surat')->with('sukses','Data Berhasil Dihapus');
    }
    public function dashboard()
        {
            return view('dashboard');
        }
    public function profile($id)
    {
        $surat=SuratModel::find($id);
        return view('surat.profile',['surat'=>$surat]);
        
        
    }
       
    
}