<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataguruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataguru', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_guru');
            $table->string('jumlah_buku');
            $table->string('jumlah_artikel');
            $table->char('total_point',100);
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
        Schema::dropIfExists('dataguru');
    }
}
