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
       return view('index',compact('buku','artikel'));
   }
}
