<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;
use App\sd_student;
use App\smp_student;
use App\sma_student;

class DatasiswaController extends Controller
{
    public function siswa()
    {
        $siswa =  Student::all();
        return view('SRS.datasiswa',['siswa' =>$siswa]);
      
    }

   
}
