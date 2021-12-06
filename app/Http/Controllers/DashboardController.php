<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratModel;

class DashboardController extends Controller
{
    public function index()
    {
        $surat =SuratModel::all();
        $total=SuratModel::where('pengirim','T')
        ->count();
       
        return view ('welcome',compact('surat','total'));
    }
}
