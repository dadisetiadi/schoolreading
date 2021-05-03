<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'levels';
    protected $primary_key = 'id_level';
    protected $fillable = ['id_level','level'];

}
