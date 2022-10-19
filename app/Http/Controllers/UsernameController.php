<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Username;

class UsernameController extends Controller
{
       public function index(){
    	    $username =Username::all();
        return view('dasboard.card',['username'=>$username]);
    
    }
      public function tambahdate(Request $request){
        Username::create([
            'id_user'=>$request->id_user,
          'nama'=>$request->nama,
           'username'=>$request->username,
             'password'=>$request->password,
               'akses'=>$request->akses
        ]);
        return redirect('/card');
    }

 public function hapusdate($id){
        $username =Username::findOrFail($id);
        $username->delete();
        return redirect('/card');
    }
      public function indexj($id){
        $username =Username::findOrFail($id);
        return view('dasboard.user.user',['username'=>$username]);
    }
    public function editdate(Request $request,$id){
        $username =Username::findOrFail($id);
          $username->update([
          	 'id_user'=>$request->id_user,
          'nama'=>$request->nama,
           'username'=>$request->username,
             'password'=>$request->password,
               'akses'=>$request->akses
          ]);
        return redirect('/card');
}
}
