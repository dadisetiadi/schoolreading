<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Teacher;
use App\School;
use App\Level;


class DataguruController extends Controller
{

   
      public function guru()
      {
       // $ibu =  Teacher::all();
        $gurufeb = Teacher::whereMonth('created_at', '02')->get();
        $gurumaret = Teacher::whereMonth('created_at', '03')->get();
        $guruapril = Teacher::whereMonth('created_at', '04')->get();
        $gurumei = Teacher::whereMonth('created_at', '05')->get();

        $bukutotal = Teacher::sum('jumlah_buku');
        $bukufeb = Teacher::whereMonth('created_at', '02')->sum('jumlah_buku');
        $bukumaret = Teacher::whereMonth('created_at', '03')->sum('jumlah_buku');
        $bukuapril = Teacher::whereMonth('created_at', '04')->sum('jumlah_buku');
        $bukumei = Teacher::whereMonth('created_at', '05')->sum('jumlah_buku');
   
        $artikeltotal = Teacher::sum('jumlah_artikel');
        $artikelfeb = Teacher::whereMonth('created_at', '02')->sum('jumlah_artikel');
        $artikelmaret = Teacher::whereMonth('created_at', '03')->sum('jumlah_artikel');
        $artikelapril = Teacher::whereMonth('created_at', '04')->sum('jumlah_artikel');
        $artikelmei = Teacher::whereMonth('created_at', '05')->sum('jumlah_artikel');
       
        $pointtotal = Teacher::sum('total_point');
        $pointfeb = Teacher::whereMonth('created_at', '02')->sum('total_point');
        $pointmaret = Teacher::whereMonth('created_at', '03')->sum('total_point');
        $pointapril = Teacher::whereMonth('created_at', '04')->sum('total_point');
        $pointmei = Teacher::whereMonth('created_at', '05')->sum('total_point');


        $monthbuku = array('Jan','Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Des');
        $databuku = array('',$bukufeb,$bukumaret, $bukuapril, $bukumei);
      //  return view('SRS.dataguru',['Months'=>$month, 'Data'=>$data]);
        $monthartikel = array('Jan','Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Des');
        $dataartikel = array('',$artikelfeb,$artikelmaret,$artikelapril );
      
        $monthpoint = array('Jan','Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Des');
        $datapoint = array('',$pointfeb,$pointmaret, $pointapril);

        $jumlah_baca = [];
        $jumlah_baca_artikel = [];
        $jumlah_point = [];
        $cikgu = [];
        foreach($gurumaret as $row){
            $cikgu[]= $row->created_at->isoFormat('MMMM');
            
            $jumlah = Teacher::whereMonth('created_at', '02')->sum('jumlah_buku');
            $jumlah_baca[] =$jumlah;

            $jumlah_atk = Teacher::sum('jumlah_artikel');
            $jumlah_baca_artikel []= $jumlah_atk;

            $jumlah_pt = Teacher::sum('total_point');
            $jumlah_point []= $jumlah_pt;
        }
      //   dd($cikgu);
        
        $level = Level::all();

        return view('SRS.dataguru',['Monthsbuku'=>$monthbuku, 'Databuku'=>$databuku,
        'Monthsartikel'=>$monthartikel, 'Dataartikel'=>$dataartikel,
        'Monthspoint'=>$monthpoint, 'Datapoint'=>$datapoint],
        
        compact('cikgu','jumlah_baca','jumlah_baca_artikel','jumlah_point',
        'gurufeb','gurumaret','guruapril','gurumei',
        'bukutotal','bukufeb','bukumaret','bukuapril','bukumei',
        'artikeltotal','artikelfeb','artikelmaret','artikelapril','artikelmei',
        'pointtotal','pointfeb','pointmaret','pointapril','pointmei','level'));
       }

    
       public function panggil()
       {
       $sekolah = School::all();
  
       return view('#exampleModal', compact('sekolah'));
       }
 
       public function create(Request $request)
       {
            
           $teacher = new \App\Teacher;
     
           $teacher->nama_guru = $request->nama_guru;
           $teacher->jumlah_buku = $request->jumlah_buku;
           $teacher->jumlah_artikel = $request->jumlah_artikel;
           $teacher->total_point = $request->total_point;

           $teacher->save();
   
        
           return redirect('/dataguru');
           
       }
    
      
    }