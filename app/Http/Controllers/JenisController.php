<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis;

class JenisController extends Controller
{
     public function index(){
    	    $jenis =Jenis::all();
        return view('dasboard.badge',['jenis'=>$jenis]);
    
    }
      public function tambahdata(Request $request){
        Jenis::create([
            'id_jenis'=>$request->id_jenis,
          'nama_jenis'=>$request->nama_jenis
        ]);
        return redirect('/badge');
    }

 public function hapusdata($id){
        $jenis =Jenis::findOrFail($id);
        $jenis->delete();
        return redirect('/badge');
    }
      public function indexg($id){
        $jenis =Jenis::findOrFail($id);
        return view('dasboard.jenis.edit',['jenis'=>$jenis]);
    }
    public function editdata(Request $request,$id){
        $jenis =Jenis::findOrFail($id);
          $jenis->update([
            'id_jenis'=>$request->id_jenis,
          'nama_jenis'=>$request->nama_jenis
          ]);
        return redirect('/badge');
}
}
