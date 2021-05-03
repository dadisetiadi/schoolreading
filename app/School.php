<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'schools';
    protected $primary_key = 'id_sekolah';
    protected $fillable = ['id_sekolah','nama_sekolah','jenjang', 'email', 'user_id', 'alamat', 'no_telp'];


    public function teacher()
    {
        return $this->hasMany(Teacher::class);
    }

}

