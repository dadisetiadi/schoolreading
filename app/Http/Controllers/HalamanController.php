<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;


class HalamanController extends Controller
{
   public function home()
   {
       $buku = Teacher::sum('jumlah_buku');
       $artikel = Teacher::sum('jumlah_artikel');
    

       $jumlah_baca = [];
       $jumlah_baca_artikel = [];
       $jumlah_point = [];
  
     
           $jumlah = Teacher::sum('jumlah_buku');
           $jumlah_baca[] =$jumlah;

           $jumlah_atk = Teacher::sum('jumlah_artikel');
           $jumlah_baca_artikel []= $jumlah_atk;

           $jumlah_pt = Teacher::sum('total_point');
           $jumlah_point []= $jumlah_pt;
       
       
       
       return view('layouts.index',compact('buku','artikel','jumlah_baca','jumlah_baca_artikel','jumlah_point'));
     
    }

   

}
