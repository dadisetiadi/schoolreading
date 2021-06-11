<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_students', function (Blueprint $table) {
            $table->bigIncrements('id_siswa');
            $table->bigInteger('id_sekolah');
            $table->string('nama_siswa');
            $table->integer('kelas');
            $table->string('alamat');
            $table->string('no_telp');
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
        Schema::dropIfExists('data_students');
    }
}
