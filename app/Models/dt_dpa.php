<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dt_dpa extends Model
{
    use HasFactory;

    protected $table = "dt_dpas";
    protected $fillable = ['program', 'kegiatan', 'no_dppa', 'no_dpa', 'tgl_dppa', 'tgl_dpa', 'tahun'];
}
