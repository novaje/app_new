<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekeningJenis extends Model
{
    use HasFactory;

    protected $table = "rekening_jenis";
    protected $fillable = ['kd_rekening_1', 'kd_rekening_2', 'kd_rekening_3', 'nm_rekening'];
}
