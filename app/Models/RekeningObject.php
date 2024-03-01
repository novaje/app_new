<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekeningObject extends Model
{
    use HasFactory;

    protected $table = "rekening_objects";
    protected $fillable = ['kd_rekening', 'nm_rekening'];
    
    public function RekObject()
    {
        return $this->hasMany(RekObjectTambah::class);
    }
}
