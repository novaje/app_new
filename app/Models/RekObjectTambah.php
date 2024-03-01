<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekObjectTambah extends Model
{
    use HasFactory;

    protected $table = "rek_object_tambah";
    protected $fillable = ['id_rekObject', 'kd_rekening1', 'nm_rekening1','id_Rek'];

    public function rek_object_tambah()
    {
        return $this->belongsTo(RekeningObject::class);
    }
    

}
