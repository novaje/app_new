<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekeningStruktur extends Model
{
    use HasFactory;

    protected $table = "rekening_strukturs";
    protected $fillable = ['kd_rekening', 'nm_rekening'];

}
