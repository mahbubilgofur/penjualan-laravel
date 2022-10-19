<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Barang;
use DB;

class TransaksiController extends Controller
{
      public function index(){
    	    $transaksi =Transaksi::all();
           $transaksi = DB::table('transaksis')
                ->select('transaksis.*','barangs.nama_barang')        
                ->join('barangs', 'barangs.id_barang', '=', 'transaksis.id_barang')
                
                ->get();

         $barang = DB::table('barangs')
        ->get();
        //dd($barang);
        return view('dasboard.bread', compact(['transaksi','barang'])) ;
    
    }
      public function tambahdata(Request $request){
         $barang = DB::table('barangs')
        ->get();
        Transaksi::create([
            'id_transaksi'=>$request->id_transaksi,
          'tgl_trx'=>$request->tgl_trx,
           'id_user'=>$request->id_user,
            'id_barang'=>$request->id_barang,
             'total_bayar'=>$request->total_bayar,
               'bayar'=>$request->bayar
         ]);
        return redirect('/bread');
    }

 public function hapusdata($id){
        $transaksi =Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect('/bread');
    }
      public function indexh($id){
        $transaksi =Transaksi::findOrFail($id);
        return view('dasboard.transaksi.transaksi',['transaksi'=>$transaksi]);
    }
    public function editdata(Request $request,$id){
        $transaksi =Transaksi::findOrFail($id);
          $transaksi->update([
  'id_transaksi'=>$request->id_transaksi,
          'tgl_trx'=>$request->tgl_trx,
           'id_user'=>$request->id_user,
            'id_barang'=>$request->id_barang,
             'total_bayar'=>$request->total_bayar,
               'bayar'=>$request->bayar
          ]);
        return redirect('/bread');
}
}
