<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class obatController extends Controller
{
    public function obat()
    {
        return view('obat.v_obat');
    }

    // search kategori obat
    public function cari()
    {
        
    }
}