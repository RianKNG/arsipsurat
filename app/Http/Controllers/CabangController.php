<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use Illuminate\Http\Request;

class CabangController extends Controller
{
    // public function index()
    // {
    //     $cabangs = Cabang::all();
    //     $dataPoints =[];
    //     foreach($cabangs as $cabang){
    //         $dataPoints[] = array(
    //             "name" => $cabang['name'],
    //             "data" => [
    //                 intval($cabang['kubikasi1']),
    //                 intval($cabang['kubikasi2']),
    //                 intval($cabang['kubikasi3']),
    //                 intval($cabang['kubikasi4']),
    //             ],
    //         );
    //     }
    //     return view("line", [
    //         "data" => json_encode($dataPoints),
    //         "kubikasis" => json_encode(array(
    //             "kub1",
    //             "kub2",
    //             "kub3",
    //             "kub4",
    //         )),
    //     ]);
        
    // }
    public function persilain()
    {
        $cabangs = Cabang::all();
        $dataPoints =[];
        foreach($cabangs as $cabang){
            $dataPoints[] = array(
                "name" => $cabang['name'],
                "data" => [
                    intval($cabang['kubikasi1']),
                    intval($cabang['kubikasi2']),
                    intval($cabang['kubikasi3']),
                    intval($cabang['kubikasi4']),
                ],
            );
        }
        return view("baris", [
            "data" => json_encode($dataPoints),
            "kubs" => json_encode(array(
                "kub1",
                "kub2",
                "kub3",
                "kub4",
            )),
        ]);
        
    }
   
}

