<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratModel;
class Layanan extends Controller
{
   
    public function index(Request $request)
    {
     
            $surat=SuratModel::paginate(9);
        
        // $total=SuratModel::where('ba_id','1')->count();
        
        return view ('surat.layanan',compact('surat'));
    }
    public function searchBydate(Request $req)
    {
        $surat=SuratModel::where ('tanggal','>=', $req->from)
        ->where ('tanggal','<=', $req->to)
        ->get();
    

    
    

        return view ('surat.layanan',compact('surat'));
        // dd($surat);
    }
       
}
