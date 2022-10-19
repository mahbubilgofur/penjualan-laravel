<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class DasboardController extends Controller
{
   public function index(){
      return view ('dasboard.utama.utama');
    }

    public function indexku(){
      return view ('dasboard.index');
    }
  
      public function indexc(){
    	return view ('dasboard.bread');
    }
     
     
      public function indexe(){
    	return view ('dasboard.card');
    }
      public function indexf($id){
        $barang =Barang::findOrFail($id);
        return view('dasboard.coba',['barang'=>$barang]);
    }
    public function editdata(Request $request,$id){
        $barang =Barang::findOrFail($id);
          $barang->update([
           'id_barang'=>$request->id_barang,
            'id_jenis'=>$request->id_jenis,
            'warna'=>$request->warna,
             'harga'=>$request->harga,
              'stok'=>$request->stok
          ]);
        return redirect('/alert');
}

     

}
