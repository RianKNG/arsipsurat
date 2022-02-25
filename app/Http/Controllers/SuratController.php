<?php

namespace App\Http\Controllers;

// use Barryvdh\DomPDF\PDF;
use PDF;
use App\Models\SuratModel;



use App\Exports\SuratExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class SuratController extends Controller
{
    public function index(Request $request)
    {
        // if($request->has('cari')){
        //     $surat=SuratModel::where('no_surat','LIKE','%'.$request->cari.'%')->get();
        // }else{
        //     $surat=SuratModel::paginate(2);
        // }
        $cari = $request->cari;
        $surat = SuratModel::where('no_surat','LIKE','%'.$request->cari.'%')
        ->orwhere('id','LIKE','%'.$request->cari.'%')
        ->paginate(5);
        // $surat = SuratModel::all();

        $total=SuratModel::count();

        
        return view ('surat.index',compact('surat','cari','total'));
    }
    public function create(Request $request)
    {
        $request->validate([
            'foto'=> 'image|mimes:jpg,jpeg',
            'no_surat'=> 'required'

        ]);
       $surat = SuratModel::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $surat->foto = $request->file('foto')->getClientOriginalName();
            $surat->save();
        }
        if($request->hasFile('pdf')){
            $request->file('pdf')->move('images/',$request->file('pdf')->getClientOriginalName());
            $surat->pdf = $request->file('pdf')->getClientOriginalName();
            $surat->save();
        }
        // dd($request->foto);
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
        if($request->hasFile('pdf')){
            $request->file('pdf')->move('images/',$request->file('pdf')->getClientOriginalName());
            $surat->pdf = $request->file('pdf')->getClientOriginalName();
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
    public function cetak()
    {
        return view('surat.cetak');
    }
    public function cetakpertanggal($tglawal,$tglakhir)
    {
        // dd(['tanggal awal :'.$tglawal, 'tanggal akhir :'.$tglakhir]);
        $cetakpertanggal=SuratModel::whereBetween('tanggal',[$tglawal,$tglakhir])->get();
        // return view('surat.cetaksuratpertanggal',compact('cetakpertanggal'));
        // return view('surat.cetaksuratpertanggal',['cetakpertanggal'=>$cetakpertanggal]);
        view()->share('cetakpertanggal', $cetakpertanggal);
        $pdf = PDF::loadview('surat.cetaksuratpertanggal');
        return $pdf->download('cetaksuratpertanggal.pdf');
    }
    public function exportexel()
    {
    
        return Excel::download(new SuratExport, 'surat.xlsx');
          
    }

}