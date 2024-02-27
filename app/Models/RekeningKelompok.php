<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekeningKelompok extends Model
{
    use HasFactory;

    protected $table = "rekening_kelompoks";
    protected $fillable = ['kd_rekening_1', 'kd_rekening_2', 'nm_rekening'];

    public static function addRekening($data)
    {
        return self::create($data);
    }
}
