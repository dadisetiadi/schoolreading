<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Teacher;

class DataguruController extends Controller
{
    public function guru()
    {
        $guru =  Teacher::all();
        $buku = Teacher::sum('jumlah_buku');
        $artikel = Teacher::sum('jumlah_artikel');
        $point = Teacher::sum('total_point');
        $bulanku = Teacher::all('bulan')->first();
        $jumlah_baca = [];
        $cikgu = [];
        foreach($guru as $row){
            $cikgu[]= $row->bulan;
            $jumlah = Teacher::sum('jumlah_buku');
            $jumlah_baca[] =$jumlah;
        }
        // dd($cikgu);
        
        return view('SRS.dataguru',compact('guru','buku','artikel','point','jumlah_baca','cikgu','bulanku'));

    }

    public function chart()
    {
        $result = Teacher::sum('jumlah_buku','jumlah_artikel','total_point');
        return response()->json($result);
    }
}
 