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
        ->get();
    

    
    

        return view ('layanan',compact('surat'));
        // dd($surat);
    }
       
}
