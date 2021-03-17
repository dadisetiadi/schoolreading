<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class PagesController extends Controller
{
   
    public function home()
    {
        $home =  Teacher::all();
        

        //menyimpan dta untuk chart
        $labels = [];

        foreach ($teachers as $tc) {
            $labels [] = $tc->total_point;
        }
        dd($labels);

        return view('index',['teachers'->$teachers, 'total_point'->$total_point]);
    }

}