<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unit_puskesmas extends Model
{
    use HasFactory;

    protected $label = "unit";
    protected $fillable = ['nama_puskesmas','status','alamat','pimpinan'];
}
