<?php

namespace App\Http\Controllers;

// use Barryvdh\DomPDF\PDF;
use App\Models\SuratModel;



use Illuminate\Http\Request;
use PDF;
class SuratController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $surat=SuratModel::where('no_surat','LIKE','%'.$request->cari.'%')->get();
        }else{
            $surat=SuratModel::paginate(8);
        }
        $total=SuratModel::where('ba_id','1')->count();
        
        return view ('surat.index',compact('surat'));
    }
    public function create(Request $request)
    {
        SuratModel::create($request->all());
        
        return redirect('/surat')->with('success', 'Data Berhasil Tersimpan!');
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
        if($request->hasfile('foto')){
            $request->file('foto')->move('images',$request->file('foto')->getClientOriginalName());
            $surat->foto = $request->file('foto')->getClientOriginalName();
          
            $surat->save();
        }

        return redirect ('/surat')->with('sukses','Data Berhasil Diubah')->with('success', 'Data Berhasil Diupdate!');
    }
    public function delete($id)
    {
        $surat=SuratModel::find($id);
        $surat->delete('surat');
        return redirect ('/surat')->with('success', 'Data Berhasil Dihapus!');
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
    public function exportpdf()
    {
      $data =  SuratModel::all();
    //   dd($data);
      view()->share('data', $data);
      $pdf = PDF::loadview('pdflaporan');
      return $pdf->download('data.pdf');
      
    }
    public function searchBydate(Request $req)
    {
        $surat=SuratModel::where ('tanggal','>=', $req->from)
        ->where ('tanggal','<=', $req->to)
        ->get();
    

    
    

        return view ('layanan',compact('surat'));
        // dd($surat);
    }
       
    
}