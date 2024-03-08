<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rincianRekObject extends Model
{
    use HasFactory;

    protected $table = "rincian_rek_object";
    protected $fillable = ['kd_rincianRekening', 'nm_rincianRekening'];
}
