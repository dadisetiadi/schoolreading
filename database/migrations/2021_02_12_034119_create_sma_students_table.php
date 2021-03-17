<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmaStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sma_students', function (Blueprint $table) {
            $table->bigIncrements('id_siswa');
            $table->string('nama_siswa');
            $table->string('jumlah_buku');
            $table->string('jumlah_artikel');
            $table->char('total_point',100);
            $table->enum('kelas', ['10', '11','12'])->default('10');
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
        Schema::dropIfExists('sma_students');
    }
}
