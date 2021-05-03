<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Teacher;
use App\School;
use App\Level;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('Guru.guru');


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
   

        return view('Guru.guru',['Monthsbuku'=>$monthbuku, 'Databuku'=>$databuku,
        'Monthsartikel'=>$monthartikel, 'Dataartikel'=>$dataartikel,
        'Monthspoint'=>$monthpoint, 'Datapoint'=>$datapoint],
        
        compact('cikgu','jumlah_baca','jumlah_baca_artikel','jumlah_point',
        'gurufeb','gurumaret','guruapril','gurumei',
        'bukutotal','bukufeb','bukumaret','bukuapril','bukumei',
        'artikeltotal','artikelfeb','artikelmaret','artikelapril','artikelmei',
        'pointtotal','pointfeb','pointmaret','pointapril','pointmei', 'level'));
       }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Guru.create-guru');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
