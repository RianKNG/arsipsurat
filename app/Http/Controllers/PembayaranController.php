<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;

class PembayaranController extends Controller
{
    public function index(Request $request)
    {
        $kubikasi =Pembayaran::where('kubikasi','50')->get();
        $totaluang =Pembayaran::where('totaluang','250000')->get();
        $tipetarip =Pembayaran::where('tipetarip','30')->get();
        return view ('pembayaran', compact('kubikasi','totaluang','tipetarip'));
    }
       

}
