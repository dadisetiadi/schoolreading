<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\User;


class DatasekolahController extends Controller
{
    public function sekolah()
    {
        $sekolah =  \App\School::all();
        return view('Sekolah.datasekolah',['sekolah' =>$sekolah]);
    }
     
    public function create(Request $request)
    {
        $user = new \App\User;
        $user->role = 'pengguna';
        $user->name = $request->nama_sekolah;
        $user->email = $request->email;
        $user->password = Hash::make($request-['password']);
        $user->remember_token = str_random(60);
        $user->save();

        $request->request->add(['user_id' => $user->id ]);
        $sekolah = \App\School::create($request->all());
        return redirect('/datasekolah');
        
    }
}
