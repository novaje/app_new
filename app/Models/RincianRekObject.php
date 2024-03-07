<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RincianRekObject extends Model
{
    use HasFactory;

    protected $table = "rincian_rek_object";
    protected $fillable = ['kd_rek_object', 'nm_rekning'];
}
