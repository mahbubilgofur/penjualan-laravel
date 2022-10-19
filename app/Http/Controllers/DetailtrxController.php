<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detailtrx;

class DetailtrxController extends Controller
{
   

 public function index(){
    	    $detailtrx =Detailtrx::all();
            
        return view('dasboard.button',['detailtrx'=>$detailtrx]);
    
    }
      public function tambahdate(Request $request){

        Detailtrx::create([
            'id_dt'=>$request->id_dt,
          'id_transaksi'=>$request->id_transaksi,
          'id_barang'=>$request->id_barang,
          'jml'=>$request->jml,
          'total'=>$request->total
        ]);
        return redirect('/button');
    }

 public function hapusdate($id){
        $detailtrx =Detailtrx::findOrFail($id);
        $detailtrx->delete();
        return redirect('/button');
    }
      public function indexi($id){
        $detailtrx =Detailtrx::findOrFail($id);
        return view('dasboard.detail.detail',['detailtrx'=>$detailtrx]);
    }
    public function editdate(Request $request,$id){
        $detailtrx =Detailtrx::findOrFail($id);
          $detailtrx->update([
             'id_dt'=>$request->id_dt,
          'id_transaksi'=>$request->id_transaksi,
          'id_barang'=>$request->id_barang,
          'jml;'=>$request->jml,
          'total'=>$request->total
          ]);
        return redirect('/button');
}

}
