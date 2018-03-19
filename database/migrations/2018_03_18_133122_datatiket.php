<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Datatiket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nomorkursi');
            $table->string('nama_pemesan');
            $table->string('jenis_kelamin');
            $table->integer('no_ktp');
            $table->string('alamat');
            $table->integer('jumlahtiket');
            $table->integer('pembayaran');
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
       Schema::drop('tikets');
    }
}
