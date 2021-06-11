<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
        
            $table->bigIncrements('id');
            $table->bigInteger('id_sekolah');
            $table->bigInteger('id_siswa');
            $table->string('nama_siswa');
            $table->string('jumlah_buku')->unique();
            $table->string('jumlah_artikel');
            $table->string('total_point');      
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
