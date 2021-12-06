<?php

namespace App\Http\Controllers;

use App\Models\Ba;
use Illuminate\Http\Request;


class BaController extends Controller
{
    public function index()
    {
       $ba = Ba::paginate(5);
    //    $total1=Ba::where('lampiran','4')->count();
    //    $total2=Ba::where('lampiran','7')->count();
      return view ('ba.index',compact('ba'));
        // return ba::all()->count('id');
        // $ba = Ba::where('lampiran','4')->count();
        // dd($ba);
        
    }
    public function create(Request $request)
    {
        $ba=Ba::create($request->all());
        if($request->hasFile('pdf')){
            $request->file('pdf')->move('images',$request->file('pdf')->getClientOriginalName());
            $ba-> pdf = $request->file('pdf')->getClientOriginalName();
            $ba->save();
        }
        
        return redirect('/ba')->with('success', 'Data Berhasil Tersimpan!');
    }
    public function delete($id)
    {
        $ba=Ba::find($id);
        $ba->delete('ba');
        return redirect ('/ba')->with('success', 'Data Berhasil Dihapus!');
    }
}
