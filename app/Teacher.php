<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $primary_key = 'id_guru';
    protected $fillable = ['id_guru', 'sekolah_id', 'nama_guru', 'jumlah_buku', 'jumlah_artikel','total_point'];

    public function School()
    {
        return $this->belongsTo(School::class);
    }


}
