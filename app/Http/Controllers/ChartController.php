<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ChartController extends Controller
{
    
    public function chart(request $request)
    {
        $apel =Product::where('product_type','buah')->get();
        $bayam =Product::where('product_type','sayuran')->get();
        $apel_count = count($apel);
        $bayam_count = count($bayam);
        return view('chart', compact('apel_count','bayam_count'));
        
    }
    public function garis()
        {
            $chart= Product::all();

            $dataPoints = [];

            foreach ($chart as $p) {
                
                $dataPoints[] = array(
                    "name" => $p['name'],
                    "data" => [
                        intval($p['price']),
                        intval($p['years']),
                        intval($p['product_type']),
                       
                    ],
                );
            }

            return view("garis", [
                "data" => json_encode($dataPoints),
                "xxx" => json_encode(array(
                    "price",
                    "years",
                    "product_type",
                  
                )),
            ]);
        }
}

