<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    public function total_jumlah_buku(){
        return $this->sum('jumlah_buku');
    }

    public function total_jumlah_artikel(){
        return $this->sum('jumlah_artikel');
    }

    public function total_jumlah_point(){
        return $this->sum('total_point');
    }
}
