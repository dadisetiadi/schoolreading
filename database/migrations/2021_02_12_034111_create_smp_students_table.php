<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmpStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smp_students', function (Blueprint $table) {
            $table->bigIncrements('id_siswa');
            $table->string('nama_siswa');
            $table->string('jumlah_buku');
            $table->string('jumlah_artikel');
            $table->char('total_point',100);
            $table->enum('kelas', ['7', '8','9'])->default('7');
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
        Schema::dropIfExists('smp_students');
    }
}
