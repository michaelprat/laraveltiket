<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiket extends Model
{
    protected $fillable=['nomorkursi','nama_pemesan','jenis_kelamin','no_ktp','alamat','jumlahtiket','pembayaran'];
    protected $primarykey='id';
}
