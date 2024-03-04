<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaldoAwalTahun extends Model
{
    use HasFactory;

    protected $table = "saldo_awal_tahun";
    protected $fillable = ['tahun_anggaran', 'nama_puskesmas', 'saldo_bank', 'saldo_tunai'];
}
