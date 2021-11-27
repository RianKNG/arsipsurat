<?php

namespace App\Http\Controllers;
use App\Models\SuratModel;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index(Request $request)
    {
     
            $surat=SuratModel::paginate(9);
        
        // $total=SuratModel::where('ba_id','1')->count();
        
        return view ('layanan',compact('surat'));
    }
    public function searchBydate(Request $req)
    {
        $surat=SuratModel::where ('tanggal','>=', $req->from)
        ->where ('tanggal','<=', $req->to)
        ->paginate(2);

        // $view = $request->view;
        // $surat=SuratModel::where ('tanggal','>=', $request->from)
        // ->where ('tanggal','<=', $request->to)
        // ->paginate(2);
    

        // $cari = $request->cari;
        // $surat = SuratModel::where('no_surat','LIKE','%'.$request->cari.'%')
        // ->paginate(1);
    

        return view ('layanan',compact('surat'));
        // dd($surat);
    }
       
}
