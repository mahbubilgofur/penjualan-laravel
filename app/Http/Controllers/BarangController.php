<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index(){
    	    $barang =Barang::all();
        return view('dasboard.alert',['barang'=>$barang]);
    
    }
      public function tambahdata(Request $request){
        Barang::create([
            'id_barang'=>$request->id_barang,
            'nama_barang'=>$request->nama_barang,
             'harga'=>$request->harga,
              'stok'=>$request->stok
        ]);
        return redirect('/alert');
    }

 public function hapusdata($id){
        $barang =Barang::findOrFail($id);
        $barang->delete();
        return redirect('/alert');
    }









}
